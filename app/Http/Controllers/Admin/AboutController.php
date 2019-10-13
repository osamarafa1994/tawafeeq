<?php

namespace App\Http\Controllers\Admin;

use App\About;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;
use Session;
use DB;

class AboutController extends Controller
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
        $all = About::select('*')->orderBy('id', 'DESC')->get();
        return view('Admin/about/index' , compact('all'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin/about/form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request , [
            'title' => 'required|string|min:5|max:255',
            'description' => 'required|string|min:50',
        ]);


        $image = request('image');
        $name = 'assets/Admin/images/about/'.time() . '.' .$image->getClientOriginalExtension();
        $path='assets/Admin/images/about';
        $image->move($path , $name);

        About::create([
            'title' => request('title'),
            'description' => request('description'),
            'status' => request('status'),
            'image' => $name,
        ]);

        Session::flash('success' , trans('app.Completed Added Successfully'));
        return redirect()->to('/admin/about_us');
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
        $find = About::where('id' , $id)->first();
        return view('Admin/about/form' , compact('find'));
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


        $this->validate($request , [
            'title' => 'required|string|min:5|max:255',
            'description' => 'required|string|min:50',
        ]);

        if(request('image') == ''){
            $name =  request('df_image');
        }else{
            $image = request('image');
            $name = 'assets/Admin/images/about/'.time() . '.' .$image->getClientOriginalExtension();
            $path='assets/Admin/images/about';
            $image->move($path , $name);
        }

        $table = 'abouts_us';

        if(Config::get('app.locale') == 'ar'){
            $table = 'abouts_us_ar';
        }


        DB::table('abouts_us')->where('id' , $id)->update([
            'title' => request('title'),
            'description' => request('description'),
            'status' => request('status'),
            'image' => $name,
        ]);
        return redirect()->back()->with('success' , trans('app.Completed Update Successfully'));



    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\About  $about
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete = About::findOrfail($id);

        $delete->delete();
        return redirect()->back()->with('success' , trans('app.Completed Delete Successfully'));
    }
}
