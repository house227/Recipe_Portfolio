import {createRouter, createWebHistory} from 'vue-router'
// 必要なコンポーネントをインポート
import HelloWorld from './components/HelloWorld'
import test from './components/test'
import ExampleComponent from './components/ExampleComponent'

export const router = createRouter({
    history: createWebHistory(),
    routes: [
        // 必要な数だけ書く
        {
            path: '/',
            name: 'index',
            component: ExampleComponent,
        },
        {
            path: '/hello',
            // nameには一意な名前をつける
            name: 'hello', 
            component: HelloWorld,
        },
        {
            path: '/bye',
            name: 'bye',
            component: test,
        }
    ]
})

export default router