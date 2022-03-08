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
            typography: ({ theme }) => ({
                white: {
                    css: {
                        "--tw-prose-body": theme("colors.white"),
                        "--tw-prose-headings": theme("colors.blue[400]"),
                        "--tw-prose-lead": theme("colors.purple[700]"),
                        "--tw-prose-links": theme("colors.blue[800]"),
                        "--tw-prose-bold": theme("colors.blue[800]"),
                        "--tw-prose-counters": theme("colors.blue[900]"),
                        "--tw-prose-bullets": theme("colors.blue[900]"),
                        "--tw-prose-hr": theme("colors.blue[800]"),
                        "--tw-prose-quotes": theme("colors.blue[800]"),
                        "--tw-prose-quote-borders": theme("colors.blue[800]"),
                        "--tw-prose-captions": theme("colors.blue[800]"),
                        "--tw-prose-code": theme("colors.blue[800]"),
                        "--tw-prose-pre-code": theme("colors.blue[200]"),
                        "--tw-prose-pre-bg": theme("colors.gray[900]"),
                        "--tw-prose-th-borders": theme("colors.blue[300]"),
                        "--tw-prose-td-borders": theme("colors.blue[200]"),
                    },
                },
                black: {
                    css: {
                        "--tw-prose-body": theme("colors.black"),
                    },
                },
            }),
        },
    },

    plugins: [
        require("@tailwindcss/forms"),
        require("@tailwindcss/typography"),
    ],
};
