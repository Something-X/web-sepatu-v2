/** @type {import('tailwindcss').Config} */
import plugin from 'tailwindcss/plugin';
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
        "./node_modules/flowbite/**/*.js",
    ],
    theme: {
        extend: {},
    },
    plugins: [
        plugin,
        require("flowbite/plugin")({
            datatables: true,
        }),
    ],
};
