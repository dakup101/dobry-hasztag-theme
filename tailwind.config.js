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
            'rose' : '#ff2758',
            'cyan' : '#50d5cd',
            'yellow' : '#f8d247',
            'yellow-light' : '#fbe66d'
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