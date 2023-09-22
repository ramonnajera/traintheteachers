/** @type {import('tailwindcss').Config} */
module.exports = {
	content: ["./public/views/**/*.{html,js,php}"],
	theme: {
		fontFamily: {
			sans: ["Faktum"],
			serif: ["Roboto Slab", "serif"],
			mono: ["Roboto Mono", "monospace"],
		},
		extend: {},
	},
	plugins: [],
};
