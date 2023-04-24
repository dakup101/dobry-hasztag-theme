module.exports = {
    content: [
        './views/*.php',
        './index.php',
        './components/*.php'
    ],
    theme: {
        colors: {
            'dark': '#222222',
            'white': '#ffffff',
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