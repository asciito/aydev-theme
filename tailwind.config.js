/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    './*.php',
    './assets/**/*.js',
    './assets/src/*.css',
  ],
  theme: {
    extend: {
      colors: {
        'floral-white': '#fdf9f3',
        'gainsboro': '#dcdbdb',
        'raisin-black': '#2c292d',
        'brink-pink': '#ff6188',
      }
    },
  },
  plugins: [],
}
