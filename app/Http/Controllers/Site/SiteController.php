<?php

namespace App\Http\Controllers\Site;

use App\About;
use App\ContactForm;
use App\Models\Product;
use App\Models\Clients;
use App\Models\ClientsOrders;
use App\Setting;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Config;
use DB;
use Illuminate\Support\Facades\Hash;
use Session;
use Carbon\Carbon;
use View;
use Alert;


class SiteController extends Controller
{
    public function __construct()
    {

       

    }

    protected function handleModel($model){
        if(Config::get('app.locale') == 'ar'){
            return  $model.'Ar';
        }
        return $model;
    }



    public function index(){
        // Main website info Data
        $data['main_data'] = Setting::orderBy('id', 'DESC')->get()->first();
       
        //Products Data
        $data['products'] = Product::orderBy('id')->paginate(8);


        $data['about'] = About::where('id', '17')->get()->first();
        $data['slider'] = About::where('id', '19')->get()->first();

        return view('Site.pages.index' , $data);
    }

    
     public function aboutUs(){
        // Main website info Data
        $data['main_data'] = Setting::orderBy('id', 'DESC')->get()->first();
       
        $data['about'] = About::where('id', '17')->get()->first();
        $data['slider'] = About::where('id', '19')->get()->first();


        return view('Site.pages.about' , $data);
     }

     public function usePolicy(){
        // Main website info Data
        $data['main_data'] = Setting::orderBy('id', 'DESC')->get()->first();
       
        $data['about'] = About::where('id', '17')->get()->first();
        $data['usePolicy'] = About::where('id', '18')->get()->first();


        return view('Site.pages.use_policy' , $data);
     }

     public function buyProduct(){
        // Main website info Data
        $data['main_data'] = Setting::orderBy('id', 'DESC')->get()->first();
       
        $data['about'] = About::where('id', '17')->get()->first();
        $data['usePolicy'] = About::where('id', '18')->get()->first();


        return view('Site.pages.buy_product' , $data);
     }
     
     

     public function allProducts(){
        // Main website info Data
        $data['main_data'] = Setting::orderBy('id', 'DESC')->get()->first();
       
        //Products Data
        $data['products'] = Product::orderBy('id')->paginate(8);


        $data['about'] = About::where('id', '17')->get()->first();
        $data['slider'] = About::where('id', '19')->get()->first();

        return view('Site.pages.all_products' , $data);
    }




    public function emailStore(Request $request){
        EmailFollow::create([
            'email' => request('email'),
        ]);
        Alert::success('',  trans('Email Sended Successfully'));

        Session::flash('success' , trans('app.Message Sended Successfully'));
        return redirect()->back();
    }



     public function productProfile($id){
           // Main website info Data
         $data['main_data'] = Setting::orderBy('id', 'DESC')->get()->first();
    
         //Products Data
         $data['products'] = Product::orderBy('id')->paginate(8);


         $data['about'] = About::where('id', '17')->get()->first();
         $data['slider'] = About::where('id', '19')->get()->first();
         $data['productDetails'] = Product::where('id', $id)->get()->first();


         return view('Site.pages.product_profile' , $data);
    }


    



    

    public function contactUs(){
       // Main website info Data
       $data['main_data'] = Setting::orderBy('id', 'DESC')->get()->first();
       
       $data['about'] = About::where('id', '17')->get()->first();
       $data['slider'] = About::where('id', '19')->get()->first();

       return view('Site.pages.contact' , $data);

    }



  

    
    public function storeContactUs(Request $request)
    {
        ContactForm::create([
            'name' => request('name'),
            'subject' => request('subject'),
            'email' => request('email'),
            'message' => request('message'),
        ]);

        Alert::success('', 'شكرا لك لقد تم ارسال رسالتك بنجاح');
        Session::flash('success' , trans('app.Message Sended Successfully'));
        return redirect()->back();
    }

    public function storeClientsOrders(Request $request)
    {
        ClientsOrders::create([
            'name' => request('name'),
            'email' => request('email'),
            'product_name' => request('product_name'),
            'details' => request('details'),
            'phone' => request('phone'),
        ]);

        Alert::success('', 'شكرا لك لقد تم ارسال طلبك بنجاح');
        Session::flash('success' , trans('app.Message Sended Successfully'));
        return redirect()->back();
    }
    



    
    
    

}














