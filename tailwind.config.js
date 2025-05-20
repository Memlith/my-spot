import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
        },
        extend: {
            colors: {
                'myspot-blue': '#006EA3',
                'myspot-blue-hover': '#1C6081',
                'myspot-blue-pressed': '#305567',
            }
        }

    },

    plugins: [forms],
    darkMode: 'class',
};
