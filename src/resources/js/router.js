import {createRouter, createWebHistory} from 'vue-router'
// 必要なコンポーネントをインポート

// ゲストでの表示
    //Top画面 
    import GuestTop from './components/Top/Guest'
    // ゲストレシピ表示
    import RecipeView_Guest from './components/RecipeView/Guest'

// ユーザーでの表示
    // Top画面
    import UserTop from './components/Top/User'

    // レシピ作成
        // レシピ投稿Top画面
        import MakeRecipe_Top from './components/MakeRecipe/Top'
        // レシピプレビュー画面
        import MakeRecipe_Preview from './components/MakeRecipe/Preview'

    // マイページ
        // マイページTop
        import Mypage_Top from './components/Mypage/Top'
        // マイレシピ一覧画面
        import Mypage_Recipe from './components/Mypage/MyRecipe'
        // お気に入り一覧画面
        import Mypage_Favorite from './components/Mypage/Favorite'
        // 新着コメント一覧
        import Mypage_NewComment from './components/Mypage/NewComment'



// 新規登録
    // 新規登録Topページ
    import UserCreate_Top from './components/NewUserCreate/Top'
    // メール送信完了ページ
    import UserCreate_SendMail from './components/NewUserCreate/SendMail'
    // 詳細なアカウント登録（メールのURLから飛ぶ先）
    import UserCreate_Index from './components/NewUserCreate/Index'
    // 確認画面
    import UserCreate_Confirm from './components/NewUserCreate/Confirm'
    // 登録完了通知画面
    import UserCreate_End from './components/NewUserCreate/End'

// ログイン
    // ログインTop画面
    import LoginTop from './components/Login/Top'

// パスワード再設定
    // パスワード再設定Top画面
    import ResetPass from './components/ResetPass/Top'
    // メール送信完了ページ
    import ResetPass_SendMail from './components/ResetPass/SendMail'
    // パスワード再設定画面
    import ResetPass_Index from './components/ResetPass/Index'
    // 完了通知画面
    import ResetPass_End from './components/ResetPass/End'

// 検索
    // 検索結果画面
    import Recipe_Search from './components/Search/Recipe'


export const router = createRouter({
    history: createWebHistory(),
    routes: [
        // 必要な数だけ書く
        {
            // ゲスト用Top画面
            path: '/',
            name: 'GuestTop',
            component: GuestTop,
            props: true,
        },
        {
            // ユーザー用Top画面（最終的に要編集？）
            path: '/UserTop',
            name: 'UserTop',
            component: UserTop,
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
        {
            // ゲスト用レシピ表示
            path: '/RecipeViewGuest',
            name: 'RecipeView_Guest',
            component: RecipeView_Guest,
        },
        {
            // レシピ作成ページ
            path: '/MakeRecipeTop',
            name: 'MakeRecipe_Top',
            component: MakeRecipe_Top,
        },
        {
            // レシピ内容確認画面
            path: '/MakeRecipePreview',
            name: 'MakeRecipe_Preview',
            component: MakeRecipe_Preview,
        },
        {
            // マイページTop
            path:'/MypageTop',
            name:'Mypage_Top',
            component: Mypage_Top
        },
        {
            // マイページ マイレシピ画面
            path: '/MypageRecipe',
            name: 'Mypage_Recipe',
            component: Mypage_Recipe,
        },
        {
            // マイページ お気に入り画面
            path: '/MypageFavorite',
            name: 'Mypage_Favorite',
            component: Mypage_Favorite,
        },
        {
            // マイページ 新着コメント画面
            path: '/MypageNewComment',
            name: 'Mypage_NewComment',
            component: Mypage_NewComment,
        },
        {
            // レシピ検索後の表示ページ
            path:'/SearchedRecipe',
            name: 'Recipe_Search',
            component: Recipe_Search,
            props: true,
        }
        
    ]
})

export default router