import defaultTheme from 'tailwindcss/defaultTheme';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './resources/**/*.blade.php',
        './resources/**/*.js',
    ],
    theme: {
        container: {
            center: true,
            padding: { DEFAULT: '1.25rem', lg: '2rem' },
            screens: { '2xl': '1240px' },
        },
        extend: {
            colors: {
                // Tungsten key light
                brand: {
                    200: '#FFE3BD',
                    300: '#FFCB87',
                    400: '#FFB14F',
                    500: '#F5962A',
                    600: '#DB7B12',
                },
                // Teal rim light
                cool: {
                    300: '#8FE3F0',
                    400: '#5FD4E6',
                },
                ink: {
                    950: '#06080C',
                    900: '#0C0F15',
                    800: '#12161E',
                    700: '#1B212B',
                    600: '#28303C',
                },
                muted: '#A3ABB8',
                whatsapp: {
                    DEFAULT: '#25D366',
                    dark: '#1EBE5A',
                },
            },
            fontFamily: {
                sans: ['"Inter Variable"', ...defaultTheme.fontFamily.sans],
                display: ['"Archivo Variable"', ...defaultTheme.fontFamily.sans],
                mono: ['"JetBrains Mono Variable"', ...defaultTheme.fontFamily.mono],
            },
        },
    },
    plugins: [],
};
