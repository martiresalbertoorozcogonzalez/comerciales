const colors = require('tailwindcss/colors')

module.exports = {
  purge: [
    './resources/**/*.blade.php',
    './resources/**/*.js',
    './resources/**/*.vue',
  ],
  darkMode: false, // or 'media' or 'class'
  theme: {
    extend: {
      colors : {
        'blueGray':colors.blueGray
      },
      backgroundImage: {
        'cabezales': 'url(/img/cabezal.jpg)',
        'cabezaldos': 'url(/img/cabezal2.jpg)',
        'furgones': 'url(/img/furgones.jpg)',
        'carros': 'url(/img/carros.jpg)',
      },
    },
  },
  variants: {
    extend: {},
  },
  plugins: [],
}
