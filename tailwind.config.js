import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
            colors:{
                red:{
                    500:'#ef4444',
                    300:'#fca5a5',
                },
                green:{
                    300:'#86efac',
                }
            }, 
            maxWidth:{
                'sm':'24rem',
            },
            whitespace:{
                wrap:'wrap',
            },
            screens:{
                'sm': '640px',
                'md': '768px',
                'lg': '1024px',
                'xl': '1280px',
            }
        },
    },

    plugins: [
        forms,
        
    ],
};
