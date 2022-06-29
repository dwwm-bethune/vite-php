import { createApp } from 'vue'
import HelloWorld from './components/HelloWorld.vue'

document.querySelectorAll('.vue-app').forEach(el => {
    createApp({
        components: {
            HelloWorld,
        },
    }).mount(el)
})
