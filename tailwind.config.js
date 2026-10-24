module.exports = {
  future: {
    removeDeprecatedGapUtilities: true,
    purgeLayersByDefault: true,
  },
  purge: {
    enabled: true,
    content: [
        './**/*.html'
    ],
    options: {
      whitelist: ['mode-dark']
    }
  },
  theme: {
    extend: {
      backgroundImage: theme => ({
        'home768': "url('img/home768.jpg')",
        'home2000': "url('img/home2000.jpg')",
        'home_dark': "url('img/home_dark.jpg')",
      })
    },
    fontSize: {
      'xs': '.75rem',
      'sm': '.875rem',
      'base': '1rem',
      'lg': '1.125rem',
      'xl': '1.25rem',
      '2xl': '1.5rem',
      '3xl': '1.875rem',
      '4xl': '2.25rem',
      '5xl': '3rem',
      '6xl': '4rem',
      '7xl': '5rem',
      '8xl': '6rem',
      '9xl': '7rem',
      '10xl': '8rem',
    },
    fontFamily: {
      sans: ['Roboto', 'sans-serif'],
      serif: ['Playfair Display', 'sans-serif']
    },
  },
  variants: {
    borderColor: ['hover'],
    textColor: ['hover', 'dark', 'dark-hover']
  },
  plugins: [
    require('tailwindcss'),
    require('autoprefixer'),
    require('tailwindcss-dark-mode')()
  ],
}
