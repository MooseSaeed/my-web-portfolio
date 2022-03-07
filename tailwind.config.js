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
            xs: "364px",

            sm: "430px",

            sd: "644px",

            md: "768px",

            lg: "1024px",

            xl: "1155px",

            "2xl": "1280px",
        },
        extend: {
            fontFamily: {
                sans: ["Nunito", ...defaultTheme.fontFamily.sans],
            },
        },
    },

    plugins: [require("@tailwindcss/forms")],
};
