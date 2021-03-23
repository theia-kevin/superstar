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
          'red-01' : {
            DEFAULT: '#860010',
          },
          'red-02' : {
            DEFAULT: '#FB4F4F',
          },
          'blue-01': {
            DEFAULT: '#42CDE2',
          },
          'blue-02': {
            DEFAULT: '#0094FC',
          },
          'blue-04': {
            DEFAULT: '#255675',
          },
          'yellow-01': {
            DEFAULT: '#FBE477',
          },
          'purple-01': {
            DEFAULT: '#6969FF',
          },
          'green-01': {
            DEFAULT: '#2F882C',
          },
          'green-02': {
            DEFAULT: '#AFCB58',
          },
          'green-03': {
            DEFAULT: '#D5E2D3',
          },
          'orange-01': {
            DEFAULT: '#F8B15D',
          },
          'orange-02': {
            DEFAULT: '#F86500',
          },
          'grey-01': {
            DEFAULT: '#E5E5E5',
          },
          'grey-02': {
            DEFAULT: '#4D4D4D',
          },
        },
        backgroundColor: {
          ...defaultColors,
          ...{
            'red-01' : {
              DEFAULT: '#860010',
            },
            'red-02' : {
              DEFAULT: '#FB4F4F',
            },
            'blue-01': {
              DEFAULT: '#42CDE2',
            },
            'blue-02': {
              DEFAULT: '#0094FC',
            },
            'blue-04': {
              DEFAULT: '#255675',
            },
            'yellow-01': {
              DEFAULT: '#FBE477',
            },
            'purple-01': {
              DEFAULT: '#6969FF',
            },
            'green-01': {
              DEFAULT: '#2F882C',
            },
            'green-02': {
              DEFAULT: '#AFCB58',
            },
            'green-03': {
              DEFAULT: '#D5E2D3',
            },
            'orange-01': {
              DEFAULT: '#F8B15D',
            },
            'orange-02': {
              DEFAULT: '#F86500',
            },
            'grey-01': {
              DEFAULT: '#E5E5E5',
            },
            'grey-02': {
              DEFAULT: '#4D4D4D',
            },
          },
        },
        borderColor: {
          ...defaultColors,
          ...{
            'red-01' : {
              DEFAULT: '#860010',
            },
            'red-02' : {
              DEFAULT: '#FB4F4F',
            },
            'blue-01': {
              DEFAULT: '#42CDE2',
            },
            'blue-02': {
              DEFAULT: '#0094FC',
            },
            'blue-04': {
              DEFAULT: '#255675',
            },
            'yellow-01': {
              DEFAULT: '#FBE477',
            },
            'purple-01': {
              DEFAULT: '#6969FF',
            },
            'green-01': {
              DEFAULT: '#2F882C',
            },
            'green-02': {
              DEFAULT: '#AFCB58',
            },
            'green-03': {
              DEFAULT: '#D5E2D3',
            },
            'orange-01': {
              DEFAULT: '#F8B15D',
            },
            'orange-02': {
              DEFAULT: '#F86500',
            },
            'grey-01': {
              DEFAULT: '#E5E5E5',
            },
            'grey-02': {
              DEFAULT: '#4D4D4D',
            },
          },
        },
        placeholderColor: {
          ...defaultColors,
          ...{
            'red-01' : {
              DEFAULT: '#860010',
            },
            'red-02' : {
              DEFAULT: '#FB4F4F',
            },
            'blue-01': {
              DEFAULT: '#42CDE2',
            },
            'blue-02': {
              DEFAULT: '#0094FC',
            },
            'blue-04': {
              DEFAULT: '#255675',
            },
            'yellow-01': {
              DEFAULT: '#FBE477',
            },
            'purple-01': {
              DEFAULT: '#6969FF',
            },
            'green-01': {
              DEFAULT: '#2F882C',
            },
            'green-02': {
              DEFAULT: '#AFCB58',
            },
            'green-03': {
              DEFAULT: '#D5E2D3',
            },
            'orange-01': {
              DEFAULT: '#F8B15D',
            },
            'orange-02': {
              DEFAULT: '#F86500',
            },
            'grey-01': {
              DEFAULT: '#E5E5E5',
            },
            'grey-02': {
              DEFAULT: '#4D4D4D',
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
      '2xl': '1600px',
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
