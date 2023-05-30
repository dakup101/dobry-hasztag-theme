module.exports = {
    content: [
        './views/*.php',
        './index.php',
        './components/*.php',
        './header.php',
        './footer.php',
        './src/ts/functions/*.ts',
        './inc/*.php'
    ],
    theme: {
        colors: {
            'dark': '#222222',
            'white': '#ffffff',
            'rose' : '#ff2758',
            'cyan' : '#4FD5CE',
            'cyan-dark' : "#36C1BA",
            'yellow' : '#f8d247',
            'yellow-light' : '#fbe66d',
            'current' : 'currentColor',
            'gray' : "#dbdbdb",
            'gray-light' : "#ededed",
            'fb' : "#1e53ff",
            'wa' : "#40ce50",
            'twi' : "#1c9cea",
            "li" : "#4de8f4",
            "share" : "#ec002e",
            "transparent" : "transparent"
        },

        container: {
            padding: {
                DEFAULT: '1rem',
                '2xl' : '2.5rem',
            },
            screens: {
                DEFAULT: '100%',
                xs: '468px',
                sm: '600px',
                md: '991px',
                lg: '1240px',
                xl: '1540px',
                '2xl': '1728px',

            }
        },
        extend: {
            fontFamily: {
                'sans' : ['Inter', 'sans-serif'], 
                'sofia' : ['sofia-pro-soft', 'sans-serif'],
                'archio' : ['Archivo Narrow', 'sans-serif'],
                'gambado' : ['gambado-sans', 'sans-serif'],
                'hydro' : ['hydrophilia-iced', 'sans-serif']
            },
            animation: {
                'spin-slow': 'spin 6s linear infinite'
            }
        }
    },
    plugins: [
    ],
}