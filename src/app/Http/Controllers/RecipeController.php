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
        //JSONが日本語で表示されるように
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($aaaa)
    {
        // 料理名検索時は文字列が1つ送られて来る
        // 材料検索の時は材料+ジャンルが入った配列が送られて来る
        // if文で文字列かどうか判別すると処理を分けれる？

        // 課題(後で良い):ジャンルが送られて来る「献立作成時」はどう分けるか
        $recipe = Recipe::where('title', $aaaa)->first();
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
