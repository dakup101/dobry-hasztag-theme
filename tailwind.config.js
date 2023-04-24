module.exports = {
    content: [
        './views/*.php',
        './index.php',
        './components/*.php',
        './header.php',
        './footer.php'
    ],
    theme: {
        colors: {
            'dark': '#222222',
            'white': '#ffffff',
            'rose' : '#ff2758',
            'cyan' : '#50d5cd',
            'yellow' : '#f8d247',
            'yellow-light' : '#fbe66d',
            'current' : 'currentColor'
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
                'archio' : ['Archivo Narrow', 'sans-serif']
            }
        }
    },
    plugins: [
    ],
}