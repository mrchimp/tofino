module.exports = {
  content: [
    './*.php',
    './inc/**/*.php',
    './src/svgs/**/*.svg',
    './templates/**/*.php',
    './src/vue/*.vue',
    './src/styles/safelist.txt',
  ],
  theme: {
    container: {
      center: true,
    },
  },
  plugins: [
    require('@tailwindcss/aspect-ratio'),
    require('@tailwindcss/forms'),
    require('@tailwindcss/typography'),
  ],
}