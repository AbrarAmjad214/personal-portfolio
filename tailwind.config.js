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
            screens: { '2xl': '1200px' },
        },
        extend: {
            colors: {
                brand: {
                    200: '#DCC8FF',
                    300: '#C9A8FF',
                    400: '#B080FF',
                    500: '#8F40FF',
                    600: '#7A2EEB',
                },
                ink: {
                    950: '#09080D',
                    900: '#100E17',
                    800: '#17141F',
                    700: '#221E2D',
                    600: '#2E2939',
                },
                muted: '#A19CB0',
                whatsapp: {
                    DEFAULT: '#25D366',
                    dark: '#1EBE5A',
                },
            },
            fontFamily: {
                sans: ['"Inter Variable"', ...defaultTheme.fontFamily.sans],
                display: ['"Space Grotesk Variable"', ...defaultTheme.fontFamily.sans],
            },
        },
    },
    plugins: [],
};
