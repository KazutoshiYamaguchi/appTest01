<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lang;

class LangsController extends Controller
{
    public function lang()
{
    $collection = Lang::all(); // 全件取得
    // 第2引数に配列値としてテンプレートへ渡す
    return view('langs', ['langs' => $collection]);
}
}
