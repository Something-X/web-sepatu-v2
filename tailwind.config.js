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
                fadeIn: 'fadeIn 0.5s ease-in-out',
                fadeOut: 'fadeOut 0.5s ease-in-out',
              },
              keyframes: {
                fadeIn: {
                  '0%': { opacity: 0 },
                  '100%': { opacity: 1 },
                },
                fadeOut: {
                  '0%': { opacity: 1 },
                  '100%': { opacity: 0 },
                },
              },
        },
    },
    plugins: [
        require("flowbite/plugin")({
            datatables: true,
        }),
    ],
};
