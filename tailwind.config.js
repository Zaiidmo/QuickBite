/** @type {import('tailwindcss').Config} */
export default {
content: [
"./resources/**/*.blade.php",
"./resources/**/*.js",
"./resources/**/*.vue",
],
theme: {
  extend: {
    colors: {
      "primary": "#181818",
      "secondary": "#FFC244",
    },
    fontFamily: {
      poppins: ["Poppins", "sans-serif"],
      passero: ["Passero One", "sans-serif"]
      // salsa: ["Salsa", "cursive"],
  },
  fontSize: {
      x12: "10rem",
      sss: "0.5rem",
  },
  },
},
plugins: [],
}
