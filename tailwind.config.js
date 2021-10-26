const defaultTheme = require('tailwindcss/defaultTheme');

module.exports = {
    mode: 'jit',
    purge: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './vendor/laravel/jetstream/**/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        './src/**/*.html',
        './src/**/*.js',
        './src/**/*.vue',
        './resources/**/*.php',
        './resources/**/*.html',
        './resources/**/*.js',
        './resources/**/*.vue',
    ],

    theme: {
        borderColor: (theme) => ({
            ...theme('colors'),
            DEFAULT: "#e5e5e5"
        }),
        extend: {
            colors: {
                supernova: {
                    '50': '#fffcf2',
                    '100': '#fffae6',
                    '200': '#fff2bf',
                    '300': '#ffeb99',
                    '400': '#ffdb4d',
                    '500': '#ffcc00',
                    '600': '#e6b800',
                    '700': '#bf9900',
                    '800': '#997a00',
                    '900': '#7d6400'
                },
                siren: {
                    '50': '#f8f3f5',
                    '100': '#f2e7eb',
                    '200': '#dec3cd',
                    '300': '#ca9faf',
                    '400': '#a35874',
                    '500': '#7b1038',
                    '600': '#6f0e32',
                    '700': '#5c0c2a',
                    '800': '#4a0a22',
                    '900': '#3c081b'
                }
            },
            fontFamily: {
                sans: ['Nunito', ...defaultTheme.fontFamily.sans],
            },
            container: {
                center: true,
            },
            screens: {
                'mini': '320px',
                '3xs': '375px',
                '2xs': '414px',
                'xs': '540px',
                'sm': '640px',
                'md': '768px',
                'lg': '1024px',
                'lgx': '1120px',
                'xl': '1280px',
                '2xl': '1440px',
                '3xl': '1536px',
                'big': '1600px',
            },
        },
    },

    variants: {
        extend: {
            opacity: ['disabled'],
            zIndex: ['responsive','hover'],
            position: ['responsive','hover'],
            padding: ['responsive','last'],
            margin: ['responsive','last'],
        },
    },

    plugins: [
        require('@tailwindcss/aspect-ratio'),
        require('@tailwindcss/forms'),
        require('@tailwindcss/typography')
    ],
};
