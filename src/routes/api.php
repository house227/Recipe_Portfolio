<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Laravel8から使用するコントローラを記述しなければならない
use App\Http\Controllers\RecipeController;


// Laravel8から書き方が変更された
// APIに対応したRestfulにしておく
// Restful：RESTに基いて設計され、情報の取得や送信など基本的な操作の方法が統一されているもの

// recipesへ接続したら接続方法によってコントローラ内のアクションが割り振られる
Route::apiResource('/recipes', RecipeController::class);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
