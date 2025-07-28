// tailwind.config.js
import defaultTheme from "tailwindcss/defaultTheme";
import forms from "@tailwindcss/forms";

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/views/**/*.blade.php",
        "./resources/js/**/*.vue",
    ],

    theme: {
        extend: {
            fontFamily: {
                heading: ["Urbanist", "sans-serif"],
                body: ["Plus Jakarta Sans", "sans-serif"],
            },
            colors: {
                brand: {
                    primary: "#FBDE37", // 1. #EBB42C 2. #F3B340
                    secondary: "#283673", // 1. #012A27 2. #364C63
                },
            },
        },
    },

    plugins: [forms],
};
