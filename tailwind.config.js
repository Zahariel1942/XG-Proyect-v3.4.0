/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/views/**/*.php",
    "./resources/views/**/*.blade.php",
    "!./resources/views/adm/**",
    "./app/Http/Controllers/**/*.php",
    "!./app/Http/Controllers/Adm/**",
    "./public/**/*.php",
    "!./public/admin/**",
  ],
  theme: {
    extend: {},
  },
  plugins: [],
}
