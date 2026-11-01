import {
    AdditiveBlending,
    BufferAttribute,
    BufferGeometry,
    Color,
    DoubleSide,
    Group,
    Mesh,
    PerspectiveCamera,
    PlaneGeometry,
    Points,
    Scene,
    ShaderMaterial,
    SRGBColorSpace,
    TextureLoader,
    WebGLRenderer,
} from 'three';

const PANEL_W = 3.2;
const PANEL_H = 2;
const BAR_H = 0.11;
const FLOOR_Y = -1.32;

const planeVertex = /* glsl */ `
    varying vec2 vUv;
    void main() {
        vUv = uv;
        gl_Position = projectionMatrix * modelViewMatrix * vec4(position, 1.0);
    }
`;

// Rounded browser window with a colour grade (teal shadows, warm highlights), rim light and glass sweep.
const panelFragment = /* glsl */ `
    uniform sampler2D map;
    uniform vec2 size;
    uniform float bar;
    uniform float cover;
    uniform float dim;
    uniform float opacity;
    uniform float time;
    uniform float mirror;
    varying vec2 vUv;

    float roundedBox(vec2 p, vec2 b, float r) {
        vec2 q = abs(p) - b + r;
        return length(max(q, 0.0)) + min(max(q.x, q.y), 0.0) - r;
    }

    void main() {
        vec2 p = (vUv - 0.5) * size;
        float d = roundedBox(p, size * 0.5, 0.07);
        float mask = 1.0 - smoothstep(-0.006, 0.006, d);
        if (mask < 0.01) discard;

        float top = size.y * 0.5 - bar;
        float v = (p.y + size.y * 0.5) / (size.y - bar);
        vec2 uv = vec2(vUv.x, 1.0 - (1.0 - v) * cover);
        vec3 col = texture2D(map, uv).rgb;

        float luma = dot(col, vec3(0.299, 0.587, 0.114));
        col = mix(col * vec3(0.72, 0.9, 1.04), col * vec3(1.08, 0.99, 0.88), smoothstep(0.1, 0.8, luma));
        col *= 0.86;

        float sweep = smoothstep(0.1, 0.0, abs(fract(time * 0.045 + vUv.x * 0.32 - vUv.y * 0.32) - 0.5));
        col += sweep * vec3(1.0, 0.9, 0.75) * 0.07;

        if (p.y > top) {
            col = vec3(0.055, 0.067, 0.09);
            vec2 q = p - vec2(-size.x * 0.5 + 0.11, top + bar * 0.5);
            for (int i = 0; i < 3; i++) {
                float light = length(q - vec2(float(i) * 0.075, 0.0));
                col = mix(vec3(0.3, 0.34, 0.4), col, smoothstep(0.019, 0.025, light));
            }
        }

        float rim = smoothstep(-0.03, 0.0, d);
        col += rim * mix(vec3(0.3, 0.8, 0.92), vec3(1.0, 0.62, 0.22), vUv.x) * 0.75;

        col *= dim;
        float fade = mirror > 0.5 ? 0.2 * smoothstep(0.45, 1.0, vUv.y) : 1.0;
        gl_FragColor = vec4(col, mask * opacity * fade);
    }
`;

const streakFragment = /* glsl */ `
    uniform float opacity;
    varying vec2 vUv;
    void main() {
        vec2 p = (vUv - 0.5) * 2.0;
        float core = exp(-abs(p.y) * 46.0) * pow(max(1.0 - abs(p.x), 0.0), 2.2);
        float bloom = exp(-length(p * vec2(1.4, 3.2)) * 3.0) * 0.5;
        vec3 tint = mix(vec3(0.3, 0.82, 0.92), vec3(1.0, 0.68, 0.3), smoothstep(-0.5, 0.35, p.x));
        gl_FragColor = vec4(tint * (core + bloom) * opacity, 1.0);
    }
`;

const shaftFragment = /* glsl */ `
    uniform vec3 tint;
    uniform float opacity;
    uniform float time;
    varying vec2 vUv;
    void main() {
        float beam = smoothstep(0.5, 0.0, abs(vUv.x - 0.5)) * pow(vUv.y, 1.5);
        beam *= 0.82 + 0.18 * sin(time * 0.5 + vUv.x * 7.0);
        gl_FragColor = vec4(tint * beam * opacity, 1.0);
    }
`;

const poolFragment = /* glsl */ `
    uniform float opacity;
    varying vec2 vUv;
    void main() {
        float d = length((vUv - 0.5) * 2.0);
        vec3 tint = mix(vec3(0.3, 0.82, 0.92), vec3(1.0, 0.6, 0.22), vUv.x);
        gl_FragColor = vec4(tint * pow(max(1.0 - d, 0.0), 2.4) * opacity, 1.0);
    }
`;

const dustVertex = /* glsl */ `
    attribute float seed;
    uniform float time;
    uniform float scale;
    varying float vAlpha;
    void main() {
        vec3 p = position;
        p.y = mod(p.y + time * (0.03 + seed * 0.05) + 3.0, 6.0) - 3.0;
        p.x += sin(time * 0.2 + seed * 40.0) * 0.14;
        vec4 mv = modelViewMatrix * vec4(p, 1.0);
        gl_Position = projectionMatrix * mv;
        gl_PointSize = (5.0 + seed * 15.0) * scale / -mv.z;
        vAlpha = (0.12 + seed * 0.42) * (0.65 + 0.35 * sin(time * 0.8 + seed * 60.0));
    }
`;

const dustFragment = /* glsl */ `
    varying float vAlpha;
    void main() {
        float a = smoothstep(0.5, 0.0, length(gl_PointCoord - 0.5));
        gl_FragColor = vec4(vec3(1.0, 0.87, 0.68) * a * vAlpha, 1.0);
    }
`;

const lightMaterial = (fragmentShader, uniforms) => new ShaderMaterial({
    vertexShader: planeVertex,
    fragmentShader,
    uniforms,
    transparent: true,
    depthWrite: false,
    blending: AdditiveBlending,
    side: DoubleSide,
});

const clamp = (value) => Math.min(1, Math.max(0, value));
const easeOut = (t) => 1 - Math.pow(1 - t, 3);

/**
 * Screenshots of real client sites floating as lit browser windows above a reflective floor.
 * Purely decorative: the copy and calls to action never wait for it, and on any failure the
 * CSS 3D stack underneath simply stays visible.
 */
export function startHeroScene(host) {
    const canvas = host.querySelector('canvas');
    const urls = JSON.parse(host.dataset.heroScene);
    const isSmall = window.innerWidth < 768;

    const renderer = new WebGLRenderer({ canvas, antialias: !isSmall, powerPreference: 'high-performance' });
    renderer.setClearColor(new Color('#06080C'), 1);
    renderer.setPixelRatio(Math.min(window.devicePixelRatio || 1, isSmall ? 1.5 : 1.75));

    const scene = new Scene();
    const camera = new PerspectiveCamera(36, 1, 0.1, 60);
    const rig = new Group();
    scene.add(rig);

    // Front to back: position, rotation, brightness (further = darker, standing in for fog).
    const slots = [
        { position: [2, 0.02, 0], rotation: -0.42, dim: 1 },
        { position: [3.7, 0.56, -1.9], rotation: -0.6, dim: 0.6 },
        { position: [2.7, 1.3, -4.2], rotation: -0.28, dim: 0.36 },
    ];

    const time = { value: 0 };
    const panels = [];
    const loader = new TextureLoader();
    const geometry = new PlaneGeometry(PANEL_W, PANEL_H);

    slots.forEach((slot, index) => {
        const uniforms = {
            map: { value: null },
            size: { value: [PANEL_W, PANEL_H] },
            bar: { value: BAR_H },
            cover: { value: 1 },
            dim: { value: slot.dim },
            opacity: { value: 0 },
            time,
            mirror: { value: 0 },
        };
        const mesh = new Mesh(geometry, new ShaderMaterial({
            vertexShader: planeVertex,
            fragmentShader: panelFragment,
            uniforms,
            transparent: true,
            side: DoubleSide,
        }));
        mesh.position.set(...slot.position);
        mesh.rotation.y = slot.rotation;
        rig.add(mesh);

        const reflection = new Mesh(geometry, new ShaderMaterial({
            vertexShader: planeVertex,
            fragmentShader: panelFragment,
            uniforms: { ...uniforms, mirror: { value: 1 } },
            transparent: true,
            depthWrite: false,
            side: DoubleSide,
        }));
        reflection.scale.y = -1;
        rig.add(reflection);

        panels.push({ mesh, reflection, slot, phase: index * 1.7 });

        loader.load(urls[index % urls.length], (texture) => {
            texture.colorSpace = SRGBColorSpace;
            texture.anisotropy = Math.min(8, renderer.capabilities.getMaxAnisotropy());
            // Crop from the top, like object-fit: cover with object-position: top.
            const { width, height } = texture.image;
            uniforms.cover.value = Math.min(1, (width / height) / (PANEL_W / (PANEL_H - BAR_H)));
            uniforms.map.value = texture;
            uniforms.opacity.value = 1;
            host.classList.add('is-ready');
        });
    });

    const streakOpacity = { value: 0 };
    const streak = new Mesh(new PlaneGeometry(13, 2.4), lightMaterial(streakFragment, { opacity: streakOpacity }));
    streak.position.set(2.1, 1.02, -0.8);
    rig.add(streak);

    const shafts = [
        { x: 3.3, rotation: -0.34, tint: [1, 0.66, 0.3], opacity: 0.2 },
        { x: 0.3, rotation: 0.3, tint: [0.3, 0.8, 0.92], opacity: 0.15 },
    ].map((config) => {
        const mesh = new Mesh(new PlaneGeometry(3.4, 8), lightMaterial(shaftFragment, {
            tint: { value: config.tint },
            opacity: { value: config.opacity },
            time,
        }));
        mesh.position.set(config.x, 1.6, -3.6);
        mesh.rotation.z = config.rotation;
        rig.add(mesh);
        return mesh;
    });

    const pool = new Mesh(new PlaneGeometry(11, 5.5), lightMaterial(poolFragment, { opacity: { value: 0.3 } }));
    pool.rotation.x = -Math.PI / 2;
    pool.position.set(2.2, FLOOR_Y, -0.4);
    rig.add(pool);

    const count = isSmall ? 110 : 300;
    const positions = new Float32Array(count * 3);
    const seeds = new Float32Array(count);
    for (let i = 0; i < count; i++) {
        positions[i * 3] = (Math.random() - 0.5) * 14 + 1.5;
        positions[i * 3 + 1] = (Math.random() - 0.5) * 6;
        positions[i * 3 + 2] = Math.random() * 7 - 4.5;
        seeds[i] = Math.random();
    }
    const dustGeometry = new BufferGeometry();
    dustGeometry.setAttribute('position', new BufferAttribute(positions, 3));
    dustGeometry.setAttribute('seed', new BufferAttribute(seeds, 1));
    const dust = new Points(dustGeometry, new ShaderMaterial({
        vertexShader: dustVertex,
        fragmentShader: dustFragment,
        uniforms: { time, scale: { value: renderer.getPixelRatio() * 4 } },
        transparent: true,
        depthWrite: false,
        blending: AdditiveBlending,
    }));
    dust.frustumCulled = false;
    rig.add(dust);

    // Wide screens: the windows sit to the right of the copy.
    // Narrow screens: they sit in the space reserved under the copy, fitted to the screen width.
    const wide = { x: 0.1, y: 0.28, lookY: 0.1, distance: 7.5, push: 1.5 };
    const shot = { ...wide };
    const resize = () => {
        const width = host.clientWidth;
        const height = host.clientHeight;
        if (!width || !height) return;
        renderer.setSize(width, height, false);
        camera.aspect = width / height;
        camera.updateProjectionMatrix();

        if (width < 1024) {
            const viewHeightPerUnit = 2 * Math.tan((camera.fov / 2) * (Math.PI / 180));
            shot.distance = (PANEL_W * 1.08) / (viewHeightPerUnit * camera.aspect);
            shot.x = 2.2;
            // Matches the padding below the copy in index.blade.php (72vw, 56vw from 640px).
            const reserved = width * (width < 640 ? 0.72 : 0.56);
            shot.lookY = (0.5 - reserved / 2 / height) * viewHeightPerUnit * shot.distance;
            shot.y = shot.lookY + 0.2;
            shot.push = 0;
        } else {
            Object.assign(shot, wide);
        }
    };
    resize();
    new ResizeObserver(resize).observe(host);

    const pointer = { x: 0, y: 0, targetX: 0, targetY: 0 };
    if (window.matchMedia('(pointer: fine)').matches) {
        window.addEventListener('pointermove', (event) => {
            pointer.targetX = event.clientX / window.innerWidth - 0.5;
            pointer.targetY = event.clientY / window.innerHeight - 0.5;
        }, { passive: true });
    }

    let visible = true;
    new IntersectionObserver(([entry]) => { visible = entry.isIntersecting; }).observe(host);

    canvas.addEventListener('webglcontextlost', () => host.classList.remove('is-ready'));

    const start = performance.now();
    let last = start;
    let frames = 0;
    let slowFrames = 0;

    const render = (now) => {
        requestAnimationFrame(render);
        if (!visible || document.hidden) {
            last = now;
            return;
        }

        const delta = now - last;
        last = now;
        // Step quality down on devices that can't keep up, rather than dropping frames.
        frames++;
        if (frames > 20 && frames < 240 && delta > 36 && ++slowFrames === 45) {
            renderer.setPixelRatio(1);
            resize();
            dust.visible = false;
        }

        const t = (now - start) / 1000;
        time.value = t;
        pointer.x += (pointer.targetX - pointer.x) * 0.05;
        pointer.y += (pointer.targetY - pointer.y) * 0.05;

        const intro = easeOut(clamp(t / 2.8));
        const scroll = clamp(window.scrollY / Math.max(host.clientHeight, 1));

        // Slow dolly in on load, then push through the windows as the page scrolls.
        camera.position.set(
            shot.x + pointer.x * 0.55 + Math.sin(t * 0.13) * 0.1 - (1 - intro) * 1.4,
            shot.y - pointer.y * 0.3 + Math.sin(t * 0.17) * 0.05 + scroll * shot.push * 0.2,
            shot.distance + (1 - intro) * 3.2 - scroll * shot.push,
        );
        camera.lookAt(shot.x + pointer.x * 0.1, shot.lookY, -0.5);

        panels.forEach(({ mesh, reflection, slot, phase }) => {
            mesh.position.y = slot.position[1] + Math.sin(t * 0.5 + phase) * 0.045;
            mesh.rotation.y = slot.rotation + Math.sin(t * 0.28 + phase) * 0.018 + scroll * 0.16;
            reflection.position.set(mesh.position.x, 2 * FLOOR_Y - mesh.position.y, mesh.position.z);
            reflection.rotation.y = mesh.rotation.y;
        });

        streakOpacity.value = (0.72 + Math.sin(t * 0.6) * 0.14) * intro;
        shafts[0].rotation.z = -0.34 + Math.sin(t * 0.09) * 0.03;

        renderer.render(scene, camera);
    };

    requestAnimationFrame(render);
}
