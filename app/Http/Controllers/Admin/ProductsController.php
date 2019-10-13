<?php

namespace App\Http\Controllers\Admin;

//use App\ClientsOrders;
//use App\Products;
//use App\ProductsCategories;
//use App\SalesBills;
use App\Models\Category;
use App\Models\ClientsOrders;
use App\Models\ClientsBills;
use App\Models\Product;
use App\Setting;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Config;
use Session;
use DB;

class ProductsController extends Controller
{
    //
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




    // products

    public function index()
    {
        $products = Product::all();

        return view('Admin.products.index',compact('products'));
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $allCategories = Product::select('*')->orderBy('id', 'DESC')->get();

        return view('Admin/products/form', compact('allCategories'));
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
            $name =  'df.jpg';
        }else{
            $image = request('image');
            $name = 'assets/Admin/images/products/'.time() . '.' .$image->getClientOriginalExtension();
            $path= 'assets/Admin/images/products';
            $image->move($path , $name);
        }


        Product::create([
            'title' => request('title'),
            'price' => request('price'),
            'available' => request('available'),
            'benefits' => request('benefits'),
            'description' => request('description'),
            'image' => $name,
            'status' => request('status'),
        ]);

        Session::flash('success' , trans('app.Completed Added Successfully'));
        return redirect()->to('/admin/products');
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
        // $allCategories = Product::select('*')->orderBy('id', 'DESC')->get();

        $find = Product::where('id' , $id)->first();
        return view('Admin/products/form' , compact('find'));
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
        if(request('image') != ''){
            $image = request('image');
            $name = 'assets/Admin/images/products/'.time() . '.' .$image->getClientOriginalExtension();
            $path= 'assets/Admin/images/products';
            $image->move($path , $name);
            DB::table('products')->where('id' , $id)->update([
                'title' => request('title'),
                'price' => request('price'),
                'available' => request('available'),
                'benefits' => request('benefits'),
                'description' => request('description'),
                'image' => $name,
                'status' => request('status'),
            ]);
        } else{
            DB::table('products')->where('id' , $id)->update([
                'title' => request('title'),
                'price' => request('price'),
                'available' => request('available'),
                'benefits' => request('benefits'),
                'description' => request('description'),
                'status' => request('status'),
            ]);
        }



        Session::flash('success' , trans('app.Completed Update Successfully'));
        return redirect()->to('/admin/products');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\About  $about
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete = Product::findOrfail($id);

        $delete->delete();
        return redirect()->back()->with('success' , trans('app.Completed Delete Successfully'));
    }


    public function send_order()
    {
        $main_data = Setting::orderBy('id', 'DESC')->get()->first();


        return view('Site.pages.send_order',compact('main_data'));

    }

    public function addToBill(Request $request)
    {

        SalesBills::insert([
            'client_name' => request('name'),
            'email' => request('email'),
            'phone' => request('phone'),
            'address' => request('address'),
            'message' => request('message'),
            'total' => session('total'),
        ]);
        //dd(session('cart'));


        ClientsOrders::insert(session('cart'));
        session()->remove('cart');
        session()->remove('total');

       return redirect()->back()->with('success', 'Product added to cart successfully!');

    }

    public function allOrders()
    {

        $all = ClientsOrders::select('*')->orderBy('id', 'DESC')->get();
        return view('Admin/sales_bills_orders/all_orders' , compact('all'));
    }



}
