<?php

namespace App\Http\Controllers;

use App\Models\Cate;
use App;
use Illuminate\Http\Request;

class CateController extends Controller
{
    public function index()
    {

        $models = Cate::all();
        return view('welcome',['models' => $models]);
    }
    // public function lang($language)
    // {
    //     app()->setLocale($language);
    //     session()->put('language', $language);
    //     return redirect()->back();
    // }
    public function lang($language)
    {
        App::setLocale($language);
        session()->put('locale', $language);

        return redirect()->back();
    }
}
