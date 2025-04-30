/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    './public/**/*.{html,php}',
    './resources/**/*.{html,php}',
    './resources/**/*.js',
    './resources/**/*.css',
    './node_modules/flowbite/**/*.js'
  ],
  theme: {
    extend: {
      colors: {
        theme: "#363FB3",
        secondary: '#D00416',
        facebook: '#3B7CFF',
        linkedin: '#7DC2FF',
        viber: '#D36DFF',
      },
      screens: {
        xs: "480px",
      },
      fontFamily: {
        inter: ['Inter', 'sans-serif'],
        "ibm-plex-sans": ['IBM Plex Sans', 'sans-serif'],
        "noto-sans-myanmar": ['Noto Sans Myanmar', 'Inter', 'sans-serif'],
      },
    },
  },
  corePlugins: {
    aspectRatio: false,
  },
  plugins: [
    require('@tailwindcss/forms'),
    require('@tailwindcss/aspect-ratio'),
    require('flowbite/plugin'),
  ],
};