<?php

namespace App\Http\Controllers\Admin;

use App\Setting;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;
use Session;
use DB;

class SettingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    protected function handleModel($model){
        if(Config::get('app.locale') == 'ar'){
            return  $model.'Ar';
        }
        return $model;
    }


    public function index()
    {
        $all = $this->handleModel('App\Setting')::select('*')->orderBy('id', 'DESC')->get();
        return view('Admin/setting/index' , compact('all'));
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin/setting/form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        if(request('image') == ''){
            $name =  request('df_image');
        }else {
            $image = request('image');
            $name = 'assets/Admin/images/setting/' . time() . '.' . $image->getClientOriginalExtension();
            $path = 'assets/Admin/images/setting';
            $image->move($path, $name);
        }
        Setting::create([
            
            'location_map' => request('location_map'),
            'address' => request('address'),
            'phone' => request('phone'),
            'facebook' => request('facebook'),
            // 'instegram' => request('instegram'),
            'whatsapp' => request('whatsapp'),
            'twitter' => request('twitter'),
            'linkedin' => request('linkedin'),
            'youtube' => request('youtube'),
            'email' => request('email'),
            'clients_number' => request('clients_number'),
            'products_number' => request('products_number'),
            'happy_clients_number' => request('happy_clients_number'),
            'visitors_number' => request('visitors_number'),
        ]);

        Session::flash('success' , trans('app.Completed Added Successfully'));
        return redirect()->to('/admin/setting');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\About  $about
     * @return \Illuminate\Http\Response
     */
    public function show(About $about)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\About  $about
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $find = Setting::where('id' , $id)->first();
        return view('Admin/setting/form' , compact('find'));
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\About  $about
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        if(request('image') == ''){
            $name =  request('df_image');
        }else{
            //image 1
            $image = request('image');
            $name = 'assets/Admin/images/setting/'.time() . '.' .$image->getClientOriginalExtension();
            $path= 'assets/Admin/images/setting';
            $image->move($path , $name);

        }


        $table = 'settings';

        if(Config::get('app.locale') == 'ar'){
            $table = 'settings_ar';
        }


        DB::table('settings')->where('id' , $id)->update([
            'location_map' => request('location_map'),
            'address' => request('address'),
            'phone' => request('phone'),
            'facebook' => request('facebook'),
            // 'instegram' => request('instegram'),
            'whatsapp' => request('whatsapp'),
            'twitter' => request('twitter'),
            'linkedin' => request('linkedin'),
            'youtube' => request('youtube'),
            'email' => request('email'),
            'clients_number' => request('clients_number'),
            'products_number' => request('products_number'),
            'happy_clients_number' => request('happy_clients_number'),
            'visitors_number' => request('visitors_number'),
            // 'main_image' => $name,
        ]);

        Session::flash('success' , trans('app.Completed Update Successfully'));
        return redirect()->to('/admin/1/edit_setting');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\About  $about
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete = $this->handleModel('App\Setting')::findOrfail($id);

        $delete->delete();
        return redirect()->back()->with('success' , trans('app.Completed Delete Successfully'));
    }
}
