/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
    './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
  ],
  theme: {
    extend: {
      fontFamily: {
        'secularone': ['Secular One', 'sans-serif'],        
        'poppins': ['Poppins', 'sans-serif'],        
      },
      colors: {
        'body': '#18181B',
        'white-primary': '#F4F4F5',
        'gray-primary': '#38383D',
        'gray-secondary': '#707070',
      },

      screens: {
        'sm-500': '500px',
        'sm-550': '550px',
        'sm-730': '730px',
        'md-768': '768px',
        'md-816': '816px',
        'md-970': '970px',
        'lg-1000': '1000px',
        'lg-1155': '1155px',
        'lg-1190': '1190px',
        'lg-1295': '1295px',
      },
    },
    plugins: [],
  }
}