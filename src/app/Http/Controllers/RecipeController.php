<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Recipe;

class RecipeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //全てのレシピを返す
        $recipe = Recipe::all();
        return $recipe;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //下記は多分使わない
        // $recipeImg = new Recipe;
        // request()->file->storeAs('public');
        // $recipeImg->photo = 'storage/';
        // $recipeImg->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($word)
    {
        //レシピ名からあいまい検索
        // $recipe = Recipe::where('title', 'like', "%{$word}%")->first();

        //●食材から検索で
        //ジャンルを選択してから、食材を入力して、
        //そのジャンルにその食材があるレシピを表示するイメージ

        //

        // $recipe = Recipe::where('recipe_type', end($word))
        // ->whereHas('ingredients', function($query)use(reset($word)){
        //     $query->where('content', 'like', "%{reset($word)}%");
        // })->get();
        
        // 料理名検索時は文字列が1つ送られて来る
        // 材料検索の時は材料+ジャンルが入った配列が送られて来る
        // if文で文字列かどうか判別すると処理を分けれる？

        // 課題(後で良い):ジャンルが送られて来る「献立作成時」はどう分けるか
        // $recipe = Recipe::where('title', $word)->first();
        // return $recipe;

        //●レシピ名/ユーザー名 から検索
        // if(is_string($word)) {
        //     echo "脳が震える";
        //     $recipe = Recipe::where('title', 'like', "%{$word}%")->first();
        //     return $recipe;
        // } else if(is_object($word)) {
        //     echo "脳が震えるよ";
        //     $recipe = Recipe::where('recipe_type', $word[1])
        //     ->whereHas('ingredients', function($query)use($word){
        //         $query->where('content', 'like', "%{$word}%");
        //     })->get();
        //     return $recipe;
        // }else{
        //     echo "怠惰";
        //     $recipe = Recipe::where('title', '唐揚げ')->first();
        //     return $recipe;
        // }
        // echo "脳が震えるwa";

        //●レシピ名と食材/ジャンルをorWhereで繋ぐ(途中)
        $recipe = Recipe::where('title', 'like', "%{$word}%")
                        ->orWhere('recipe_type', 'like', "%{$word}%")
                        ->whereHas('ingredients', function($query)use($word){
                            $query->where('content', 'like', "%{$word}%");
                        })->get();
                        return $recipe;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
