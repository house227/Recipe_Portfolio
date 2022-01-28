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
        $recipe = Recipe::where('recipe_type', '和食')
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
