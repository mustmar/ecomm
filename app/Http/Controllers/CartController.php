<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Auth\Events\Validated;
use Illuminate\Support\Facades\Validator;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $id=Auth::user()->id;

        $cart=Cart::where('user_id',$id)->get();

        return view('user.cart',compact('cart'));
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
    public function store(Request $request,$id)
    {
        $produ=Product::FindOrFail($id);


       $cart= new Cart();

        $cart->user_id=Auth::user()->id;
        $cart->pro_id=$produ->id;
        $cart->productqty=$request->input('quantity');
        
        $cart->cate_id=$produ->Getcategory->id;
        $cart->productname=$produ->name;
        $produ->quantity=$produ->quantity-$request->input('quantity');

        $cart->categoryname=$produ->Getcategory->name;
        $cart->save();
        $produ->save();

        return redirect()->back();








    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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

        $cart=Cart::find($id);
        $product=Product::find($cart->pro_id);
        $product->quantity+=$cart->productqty;
        $product->save();
        $cart->delete();
        return redirect()->route('cart.all');
    }
}
