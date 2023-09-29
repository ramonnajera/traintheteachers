/** @type {import('tailwindcss').Config} */
module.exports = {
	content: ["./views/**/*.php"],
	theme: {
		extend: {
			backgroundImage: {
				"gradient-radial": "radial-gradient(var(--tw-gradient-stops))",
				"gradient-conic":
					"conic-gradient(from 180deg at 50% 50%, var(--tw-gradient-stops))",
			},
			colors: {
				primary: "#d7175e",
				secondary: "#009989",
				softgray: "#808490",
				hardgray: "#45484c",
				black: "#232323",
			},
		},
	},
	plugins: [],
};
