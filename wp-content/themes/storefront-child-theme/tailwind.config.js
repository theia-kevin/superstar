const {colors: defaultColors} = require('tailwindcss/defaultTheme');

module.exports = {
  corePlugins: {
    preflight: false,
  },
  purge: {
    enabled: false,
  },
  important: true,
  darkMode: false,
  theme: {
    extend: {
      colors: {
        ...defaultColors,
        ...{
          'blue-01': {
            DEFAULT: '#42CDE2',
          },
        },
        backgroundColor: {
          ...defaultColors,
          ...{
            'blue-01': {
              DEFAULT: '#42CDE2',
            },
          },
        },
        borderColor: {
          ...defaultColors,
          ...{
            'blue-01': {
              DEFAULT: '#42CDE2',
            },
          },
        },
      },
      fontFamily: {
        'sans': ['sofia-pro', 'sans-serif'],
        'serif': ['sofia-pro', 'sans-serif'],
        'mono': ['sofia-pro', 'sans-serif']
      },
    },
    screens: {
      'sm': '640px',
      'md': '768px',
      'lg': '1024px',
      'xl': '1280px',
      '2xl': '1536px',
    },
  },
  variants: {},
  plugins: [
    require('@tailwindcss/forms'),
    require('tailwindcss-debug-screens'),
  ],
};
