/** @type {import('tailwindcss').Config} */
const defaultTheme = require('tailwindcss/defaultTheme');

module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
    ],
    darkMode: 'class',

    theme: {
        extend: {
            fontFamily: {
                sans: ['Nunito', ...defaultTheme.fontFamily.sans],
            },
            colors:{
                primary: '#F66200',
                secondary: '#D3D3D3',
                danger: '#D80000',
            }
        },

    },

    variants: {
        extend: {
            opacity: ['disabled'],
        },
    },

}
