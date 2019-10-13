<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\EstimateApp;
use App\FormEstimate;

class EstimateController extends Controller
{
    public function index(){
        $all = EstimateApp::all();
        $first = EstimateApp::first();

        return view('Site.pages.estimate' , compact('all' , 'first'));
    }

    public function estimate(Request $request){
        $estimate = EstimateApp::all();

        // foreach($estimate as $es){
            // print_r('question_'.$es->id);
            // exit();
        //     FormEstimate::create([
        //         'name' => request('name'),
        //         'email' => request('email'),
        //         'phone' => request('phone'),
        //         'address' => request('address'),
        //         'message' => request('message'),
        //         'question' => request($es[0]['id']) == $es[0]['id'] ? request($es[0]['id']) : '',
        //     ]);
        // }
        
        // return redirect()->back();
    
    }
}
