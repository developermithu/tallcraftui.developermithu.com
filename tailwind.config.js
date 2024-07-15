/** @type {import('tailwindcss').Config} */

import defaultTheme from "tailwindcss/defaultTheme";
import forms from "@tailwindcss/forms";

export default {
    darkMode: "class",
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./app/Livewire/**/**/*.php",
        "./app/View/Components/**/**/*.php",
    ],
    theme: {
        container: {
            center: true,
            padding: {
                DEFAULT: "1rem",
                // sm: "2rem",
                // lg: "3rem",
                // xl: "3rem",
                // "2xl": "3rem",
            },
        },

        extend: {
            fontFamily: {
                lato: ["Lato", ...defaultTheme.fontFamily.sans],
            },
        },
    },
    plugins: [forms],
};
