<?php

namespace App\Http\Controllers\Admin;

use App\All_User;
use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Session;
use DB;
use Illuminate\Support\Facades\Hash;

class AllUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $all = All_User::all();
        return view('Admin/user/index' , compact('all'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin/user/form');
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
            'name' => 'required|string|min:5|max:255',
            'email' => 'required',
            'password' => 'required|min:5|max:255',
            'role_id' => 'required',
            'status' => 'required'
        ]);

//        if(request('image') == ''){
//            $name =  'df.jpg';
//        }else{
//            $image = request('image');
//            $name = time() . '.' .$image->getClientOriginalExtension();
//            $path= public_path('assets/Admin/images/user');
//            $image->move($path , $name);
//        }


        $user = User::create([
            'name' => request('name'),
            'email' => request('email'),
            'password' => Hash::make(request('password')),
            'role_id' => request('role_id'),
            'status' => request('status') ? request('status') : 0,
        ]);

        All_User::create([
            'user_id' => $user->id,
            'name' => request('name'),
            'phone' => request('phone'),
//            'image' => $name,
        ]);



        Session::flash('success' , trans('app.Completed Added Successfully'));
        return redirect()->to('/admin/user');
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
        $find = All_User::where('id' , $id)->first();
        return view('Admin/user/form' , compact('find'));
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
            'name' => 'required|string|min:5|max:255',
            'email' => 'required',
            'role_id' => 'required',
            'status' => 'required'
        ]);

//        if(request('image')->getClientOriginalExtension() == ''){
//            $name =  request('df_image');
//        }else{
//            $image = request('image');
//            $name = time() . '.' .$image->getClientOriginalExtension();
//            $path= public_path('assets/Admin/images/user');
//            $image->move($path , $name);
//        }

        $all_user = All_User::select('user_id')->where('id' , $id)->first();
        $user = User::where('id' , $all_user->user_id)->first();
        $update_user = All_User::findOrFail($id);

        $user->update([
            'name' => request('name'),
            'email' => request('email'),
            'role_id' => request('role_id'),
            'status' => request('status') ? request('status') : 0,
        ]);

        $update_user->update([
            'user_id' => $user->id,
            'name' => request('name'),
            'phone' => request('phone'),
//            'image' => $name,
        ]);

        Session::flash('success' , trans('app.Completed Update Successfully'));
        return redirect()->to('/admin/user');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\About  $about
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $all_user = All_User::select('user_id')->where('id' , $id)->first();
        $user = User::where('id' , $all_user->user_id)->first();

        $delete = All_User::findOrfail($id);

        $delete->delete();
        $user->delete();
        return redirect()->back()->with('success' , trans('app.Completed Delete Successfully'));
    }
}
