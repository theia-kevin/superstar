const {colors: defaultColors} = require('tailwindcss/defaultTheme');

module.exports = {
  corePlugins: {
    preflight: true,
  },
  purge: {
    enabled: true,
    content: [
      './resources/js/*.{js,vue}',
      './resources/js/**/*.{js,vue}',
      './resources/sass/*.scss',
      './resources/sass/**/*.scss',
      './*.php',
      './**/*.php',
    ]
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
          },
          'green-01': {
            DEFAULT: '#2f882c',
          },
          'green-02': {
            DEFAULT: '#afcb58',
          },
          'green-03': {
            DEFAULT: '#d5e2d3',
          },
          'orange-01': {
            DEFAULT: '#F8B15D',
          },
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
            },
            'green-01': {
              DEFAULT: '#2f882c',
            },
            'green-02': {
              DEFAULT: '#afcb58',
            },
            'green-03': {
              DEFAULT: '#d5e2d3',
            },
            'orange-01': {
              DEFAULT: '#F8B15D',
            },
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
            },
            'green-01': {
              DEFAULT: '#2f882c',
            },
            'green-02': {
              DEFAULT: '#afcb58',
            },
            'green-03': {
              DEFAULT: '#d5e2d3',
            },
            'orange-01': {
              DEFAULT: '#F8B15D',
            },
          },
        },
        placeholderColor: {
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
            },
            'green-01': {
              DEFAULT: '#2f882c',
            },
            'green-02': {
              DEFAULT: '#afcb58',
            },
            'green-03': {
              DEFAULT: '#d5e2d3',
            },
          },
        }
      },
      fontFamily: {
        'sans': ['sofia-pro-light', 'sans-serif'],
        'serif': ['sofia-pro-light', 'sans-serif'],
        'mono': ['sofia-pro-light', 'sans-serif'],
        'sofia-pro-light': ['sofia-pro-light', 'sans-serif'],
        'sofia-pro': ['sofia-pro', 'sans-serif'],
        'sofia-pro-medium': ['sofia-pro-medium', 'sans-serif'],
        'jumble': ['jumble', 'sans-serif'],
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
    fontWeight: ['hover'],
    transform: ['hover'],
    overflow: ['hover'],
  },
  plugins: [
    require('@tailwindcss/forms'),
    require('tailwindcss-debug-screens'),
  ],
};
