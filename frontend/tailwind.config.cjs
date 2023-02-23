/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./index.html",
    "./src/**/*.{js,ts,jsx,tsx}",
  ],
  theme: {
    extend: {},
    colors: {
      'blue': '#5090AC',
      'dark-blue': '#1D3D50',
      'yellow': '#F9C74B',
      'white': '#F7F7F7',
      'gray': '#E3E3E3',
      'dark-gray': '#9AA0A6'
    }
  },
  plugins: [],
}