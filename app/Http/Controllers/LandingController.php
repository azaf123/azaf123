<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\Cart;
use Illuminate\Http\Request;

class LandingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // nampilin seluruh data
    public function index()
    {
        $category = Category::all();
        $product = Product::orderByDesc('product_soldout')-> get();
        // return $product;
        return view('landingpage.index', compact('category','product'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    
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
    public function show($id) //menampilkan data dari satu table
    {
        $product = Product::where('id', $id)->first();
        // return $product;
        return view('landingpage.detail', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
    public function keranjang(){
        $cart = Cart::all();
        return view('landingpage.keranjang', compact('cart'));
    }
    public function keranjang_store(Request $request){
        return $request;
        $request->validate([
            'kuantitas' =>'required',
        ],
        [
            'kuantitas.required' =>'Kuantitas  is required', 
        ]);
        $product = Product::where('id', $request->productid)->first();
        // return $product->product_price;
        Cart::create([
            'product_id' => $request ->productid,
            'product_qty' =>  $request->kuantitas,
            'total_price' => ($request->kuantitas) * ($product->product_price),
            'status_checkout' =>0,
        ]);
        return redirect('/keranjang');
    }
}

