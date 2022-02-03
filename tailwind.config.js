module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
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
                body: ["Open Sans"],
            },
        },
    },
    plugins: [],
};
