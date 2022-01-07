import {createRouter, createWebHistory} from 'vue-router'
// 必要なコンポーネントをインポート
import UserCreate_Top from './components/NewUserCreate/UserCreate_Top'
import bye from './components/Bye'
import GuestTop from './components/Top/GuestTop'



export const router = createRouter({
    history: createWebHistory(),
    routes: [
        // 必要な数だけ書く
        {
            path: '/',
            name: 'GuestTop',
            component: GuestTop,
        },
        {
            path: '/newusercreate',
            // nameには一意な名前をつける
            name: 'UserCreate_Top', 
            component: UserCreate_Top,
        },
        {
            path: '/bye',
            name: 'bye',
            component: bye,
        },
        
        
    ]
})

export default router