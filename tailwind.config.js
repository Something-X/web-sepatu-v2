/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
        "./node_modules/flowbite/**/*.js",
    ],
    theme: {
        extend: {
            animation: {
                move: "move 0.4s ease-in-out", // Menambahkan animasi move yang kustom
              },
              keyframes: {
                move: {
                  "0%, 49.99%": {
                    opacity: "0",
                    zIndex: "1",
                  },
                  "50%, 100%": {
                    opacity: "1",
                    zIndex: "5",
                  },
                },
              },
        },
    },
    plugins: [
        require("flowbite/plugin")({
            datatables: true,
        }),

        require('tailwindcss-motion')
    ],
};
