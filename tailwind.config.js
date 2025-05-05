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
      keyframes: {
        phoneRing: {
          '0%': { transform: 'rotate(0deg)' },
          '10%': { transform: 'rotate(-15deg)' },
          '20%': { transform: 'rotate(15deg)' },
          '30%': { transform: 'rotate(-10deg)' },
          '40%': { transform: 'rotate(10deg)' },
          '50%': { transform: 'rotate(-5deg)' },
          '60%': { transform: 'rotate(5deg)' },
          '70%, 100%': { transform: 'rotate(0deg)' },
        },
      },
      animation: {
        phoneRing: 'phoneRing 0.6s ease-in-out',
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