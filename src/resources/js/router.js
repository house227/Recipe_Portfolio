import {createRouter, createWebHistory} from 'vue-router'
// 必要なコンポーネントをインポート
import hello from './components/hello'
import bye from './components/Bye'
import Top from './components/Top'

export const router = createRouter({
    history: createWebHistory(),
    routes: [
        // 必要な数だけ書く
        {
            path: '/',
            name: 'Top',
            component: Top,
        },
        {
            path: '/hello',
            // nameには一意な名前をつける
            name: 'hello', 
            component: hello,
        },
        {
            path: '/bye',
            name: 'bye',
            component: bye,
        },
    ]
})

export default router