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
          'blue-02': {
            DEFAULT: '#0094fc',
          },
          'yellow-01': {
            DEFAULT: '#FBE477',
          },
          'purple-01': {
            DEFAULT: '#6969ff',
          }
        },
        backgroundColor: {
          ...defaultColors,
          ...{
            'blue-01': {
              DEFAULT: '#42CDE2',
            },
            'blue-02': {
              DEFAULT: '#0094fc',
            },
            'yellow-01': {
              DEFAULT: '#FBE477',
            },
            'purple-01': {
              DEFAULT: '#6969ff',
            }
          },
        },
        borderColor: {
          ...defaultColors,
          ...{
            'blue-01': {
              DEFAULT: '#42CDE2',
            },
            'blue-02': {
              DEFAULT: '#0094fc',
            },
            'yellow-01': {
              DEFAULT: '#FBE477',
            },
            'purple-01': {
              DEFAULT: '#6969ff',
            }
          },
        },
      },
      fontFamily: {
        'sans': ['sofia-pro-light', 'sans-serif'],
        'serif': ['sofia-pro-light', 'sans-serif'],
        'mono': ['sofia-pro-light', 'sans-serif']
      },
    },
    screens: {
      'sm': '640px',
      'md': '768px',
      'lg': '1024px',
      'xl': '1280px',
      '2xl': '1350px',
    },
  },
  variants: {
    extend: {},
    fontWeight: ['responsive', 'hover', 'focus', 'active', 'group-hover'],
    transform: ['hover', 'focus'],
    overflow: ['hover', 'focus'],
  },
  plugins: [
    require('@tailwindcss/forms'),
    require('tailwindcss-debug-screens'),
  ],
};
