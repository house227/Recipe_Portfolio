import {createRouter, createWebHistory} from 'vue-router'
// 必要なコンポーネントをインポート

import GuestTop from './components/Top/GuestTop'

import UserCreate_Top from './components/NewUserCreate/UserCreate_Top'
import UserCreate_SendMail from './components/NewUserCreate/UserCreate_SendMail'
import UserCreate_Index from './components/NewUserCreate/UserCreate_Index'
import UserCreate_Confirm from './components/NewUserCreate/UserCreate_Confirm'
import UserCreate_End from './components/NewUserCreate/UserCreate_End'

import LoginTop from './components/Login/Login_Top'

import ResetPass from './components/ResetPass/ResetPass_Top'
import ResetPass_SendMail from './components/ResetPass/ResetPass_SendMail'
import ResetPass_Index from './components/ResetPass/ResetPass_Index'
import ResetPass_End from './components/ResetPass/ResetPass_End'




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
            // 新規登録用入力情報確認画面
            path: '/CreateConfirm' ,
            name: 'UserCreate_Confirm' ,
            component: UserCreate_Confirm,
        },
        {
            // 新規登録完了画面
            path: '/CreateEnd' ,
            name: 'UserCreate_End' ,
            component: UserCreate_End,
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
        {
            // パスワード再設定画面
            path: '/ResetIndex' ,
            name: 'ResetPass_Index' ,
            component: ResetPass_Index,
        },
        {
            // パスワード再設定完了画面
            path: '/ResetEnd' ,
            name: 'ResetPass_end' ,
            component: ResetPass_End,
        },
        
    ]
})

export default router