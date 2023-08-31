/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            colors: {
                "red": {
                    150: "#73181A",
                    140: "#891D1F",
                    130: "#A02224",
                    120: "#B72629",
                    110: "#CE2B2E",
                    DEFAULT: "#E53033",
                    90: "#E84547",
                    80: "#EA595C",
                    70: "#ED6E70",
                    60: "#EF8385",
                    50: "#F29799",
                    40: "#F5ACAD",
                    30: "#F7C1C2",
                    20: "#FAD6D6",
                    10: "#FCEAEB",
                    "slight": "#FEF5F5"
                },
                "ochre": "#f5efe0"
            },
            fontSize: {
                "2xs": ".65rem",
                "3xs": ".5rem",
            },
        },
    },
    plugins: [],
}

