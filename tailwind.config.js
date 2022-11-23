const defaultTheme = require('tailwindcss/defaultTheme');

/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './vendor/laravel/jetstream/**/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        './resources/js/**/*.vue',
    ],

    darkMode: 'class',

    theme: {
        extend: {
            fontFamily: {
                sans: ['Poppins', ...defaultTheme.fontFamily.sans],
                
            },
        },
        extend:{
            colors : {
                primaryBackground : '#2535a1',
                secondaryBackground: '#ffc652',
               tertiaryBackground: '#ff6551',
               cancelBackground : '#777777',
               whiteTextColor :  '#fff',
               blackTextColor : '#000',
               darkBgBackground: '#111827',
               darkPrimaryBackground: '#1e293b',
               darkSecondaryBackground: '#374151'
            }
            ,
            fontSize: {
                standard : '32px',
                mobilestandard : '16px'
            }
        },
    },

    plugins: [require('@tailwindcss/forms'), require('@tailwindcss/typography')],
};
