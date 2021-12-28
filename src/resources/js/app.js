import { createApp, VueElement } from 'vue'
import App from './App.vue'
import { router } from './router'

// import ExampleComponent from './components/ExampleComponent.vue'



// Vue.component('test-component', require('src/resources/js/components/test.vue').default);
createApp(App)
.use(router)
.mount('#app')