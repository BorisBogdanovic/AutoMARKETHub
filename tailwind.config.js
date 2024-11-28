/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
          colors:{
              primary:{
                  or:'#f1b905',
                  hor:'#f1a41a',
                  fc:'#222222',
                  og:'#f4f4f4'
              }
          }
        },
    },
    plugins: [],
}
