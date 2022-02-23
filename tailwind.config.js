const defaultTheme = require("tailwindcss/defaultTheme");

module.exports = {
    darkMode: "class",
    content: [
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/views/*.blade.php",
        "./resources/views/components/*.blade.php",
        "./resources/views/auth/*.blade.php",
        "./resources/views/layouts/*.blade.php",
        "./resources/js/components/categories/*.vue",
        "./resources/js/components/**/*.vue",
    ],

    theme: {
        screens: {
            sm: "430px",
            // => @media (min-width: 640px) { ... }

            md: "768px",
            // => @media (min-width: 768px) { ... }

            lg: "1024px",
            // => @media (min-width: 1024px) { ... }

            xl: "1155px",
            // => @media (min-width: 1280px) { ... }

            "2xl": "1280px",
            // => @media (min-width: 1536px) { ... }
        },
        extend: {
            fontFamily: {
                sans: ["Nunito", ...defaultTheme.fontFamily.sans],
            },
        },
    },

    plugins: [require("@tailwindcss/forms")],
};
