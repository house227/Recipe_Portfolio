<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Laravel8から使用するコントローラを記述しなければならない
use App\Http\Controllers\RecipeController;
use App\Http\Controllers\AppuserController;
use App\Http\Controllers\AllergyController;
use App\Http\Controllers\IngredientController;
use App\Http\Controllers\ProcedureController;


// Laravel8から書き方が変更された
// APIに対応したRestfulにしておく
// Restful：RESTに基いて設計され、情報の取得や送信など基本的な操作の方法が統一されているもの

// recipesへ接続したら接続方法によってコントローラ内のアクションが割り振られる
Route::apiResource('/recipes', RecipeController::class);
Route::apiResource('/appusers', AppuserController::class);
Route::apiResource('/allergys', AllergyController::class);
Route::apiResource('/ingredients', IngredientController::class);
Route::apiResource('/procedures', ProcedureController::class);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
