import {createRouter, createWebHistory} from 'vue-router'
// 必要なコンポーネントをインポート

import GuestTop from './components/Top/GuestTop'
import UserCreate_Top from './components/NewUserCreate/UserCreate_Top'
import UserCreate_SendMail from './components/NewUserCreate/UserCreate_SendMail'
import UserCreate_Index from './components/NewUserCreate/UserCreate_Index'
import LoginTop from './components/Login/Login_Top'
import ResetPass from './components/ResetPass/ResetPass_Top'
import ResetPass_SendMail from './components/ResetPass/ResetPass_SendMail'
import bye from './components/Bye'



export const router = createRouter({
    history: createWebHistory(),
    routes: [
        // 必要な数だけ書く
        {
            // ゲスト用Top画面
            path: '/',
            name: 'GuestTop',
            component: GuestTop,
        },
        {
            // 新規登録メールフォーム
            path: '/NewUserCreate',
            // nameには一意な名前をつける
            name: 'UserCreate_Top', 
            component: UserCreate_Top,
        },
        {
            // 新規登録用メール送信画面
            path: '/SendMail' ,
            name: 'UserCreate_SendMail' ,
            component: UserCreate_SendMail,
        },
        {
            // 新規登録用情報入力画面
            path: '/CreateIndex' ,
            name: 'UserCreate_Index' ,
            component: UserCreate_Index,
        },
        {
            // ログインフォームTop
            path: '/LoginTop',
            name: 'LoginTop',
            component: LoginTop,
        },
        {
            // パスワード再設定用
            path: '/ResetPass',
            name: 'ResetPass',
            component: ResetPass,
        },
        {
            // パスワード再設定用メール送信画面
            path: '/ResetSendMail' ,
            name: 'ResetPass_SendMail' ,
            component: ResetPass_SendMail,
        },
        
    ]
})

export default router