/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
  ],
  theme: {
    extend: {
      fontFamily: {
        'poppins': ['Poppins', 'sans-serif'],
      },
      backgroundColor: {
        'custom': '#0B0819',
        'lg-purple': '#644178',
        'lg-blue': '#485E87',

      },
    },
  },
  plugins: [],
}


