<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;
use Lang;

class LanguageController extends Controller
{
    public function changeLanguage(Request $request,$locale) {

        $request->session()->put('locale',$locale);
        return back();
    }
}
