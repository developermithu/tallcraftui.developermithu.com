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
        "./vendor/developermithu/tallcraftui/src/View/Components/**/*.php",
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

        screens: {
            xxs: "375px",
            xs: "475px",
            ...defaultTheme.screens,
        },

        extend: {
            fontFamily: {
                lato: ["Lato", ...defaultTheme.fontFamily.sans],
            },

            colors: {
                primary: "#23B9AD",
                secondary: "#6167EF",
            },
        },
    },
    plugins: [forms],
};
