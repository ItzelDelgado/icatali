import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';
import typography from '@tailwindcss/typography';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './vendor/laravel/jetstream/**/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
            backgroundImage: {
                'nube-azul': "url('../../../icatali/public/img/decoraciones/nube-azul.svg')",
                'nube-verde': "url('../../../icatali/public/img/decoraciones/nube-verde.svg')",
            },
            colors: {
                'verde-icatali': '#ECF7EC',
            },
        },
        container: {
            // you can configure the container to be centered
            center: true,

            // or have default horizontal padding
            padding: '1rem',

            // default breakpoints but with 40px removed
            screens: {
                sm: '620px',
                md: '820px',
                lg: '920px',
                xl: '1000px',
                '2xl': '1200px',
            },
        }
    },

    plugins: [forms, typography],
};
