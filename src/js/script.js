const { createApp } = Vue

createApp({
    data() {
        return {
            songData: {
                name: 'University',
                artists: ['Franco 126', 'Gianni Bismark']
            }
        }
    }
}).mount('#app')