import {createRouter, createWebHistory} from 'vue-router'
// 必要なコンポーネントをインポート
import HelloWorld from './components/HelloWorld'
import bye from './components/bye'
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
            component: bye,
        },
        {
            path: '/test',
            name: 'test',
            component: test,
        }
    ]
})

export default router