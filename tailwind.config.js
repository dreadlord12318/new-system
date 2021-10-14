module.exports = {
  purge: [
    './resources/views/**/*.blade.php',
    './resources/css/**/*.css',
  ],
  theme: {
    extend: {
      fontFamily:{
        cursive: ['Diamant']
      },
      fontSize: {
        'xs': '.75rem',
        'sm': '.875rem',
        'tiny': '.875rem',
         'base': '1rem',
         'lg': '1.125rem',
         'xl': '1.25rem',
         '2xl': '1.5rem',
        '3xl': '1.875rem',
        '4xl': '2.25rem',
         '5xl': '3rem',
         '6xl': '4rem',
        '7xl': '5rem',
      },
      colors:{
        westcott: {

        },
        chelsea: {
          DEFAULT: '#8AAA4A',
          '50': '#EFF4E6',
          '100': '#E4ECD4',
          '200': '#CEDDB0',
          '300': '#B8CD8D',
          '400': '#A2BE69',
          '500': '#8AAA4A',
          '600': '#6D863B',
          '700': '#50632B',
          '800': '#333F1C',
          '900': '#171C0C'
        },
        deep: {
          DEFAULT: '#164100',
          '50': '#70FF27',
          '100': '#60FF0E',
          '200': '#4ADA00',
          '300': '#39A700',
          '400': '#277400',
          '500': '#164100',
          '600': '#050E00',
          '700': '#000000',
          '800': '#000000',
          '900': '#000000'
        },
        wedgewood: {
          DEFAULT: '#498C96',
          '50': '#D8EAEC',
          '100': '#C7E0E4',
          '200': '#A5CDD3',
          '300': '#83BAC2',
          '400': '#60A7B2',
          '500': '#498C96',
          '600': '#386C74',
          '700': '#284C51',
          '800': '#172C2F',
          '900': '#060C0D'
        },
      }
    }
  },
  variants: {},
  plugins: [
    require('@tailwindcss/ui'),
  ]
}
