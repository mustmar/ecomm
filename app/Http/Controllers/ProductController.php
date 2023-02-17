<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products=Product::all();

        return view('product.index',compact('products'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category=Category::all();
        return view('product.crea',compact('category'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validate=Validator::make($request->all(),[
            'name'=>'required',
            'descrption'=>'required',
            'image'=>'required',
            'quantity'=>'required'

        ]);

            $product =new Product();
            if($request->hasFile('image')) {
                $file=$request->file('image');

                //dd($file);
                $ext=$file->getClientOriginalExtension();
                $filename=time().'.'.$ext;

                $file->move('product/image',$filename);
                $product->image=$filename;




            }
            $product->price=$request->price;
            $product->quantity=$request->quantity;
            $product->name=$request->input('name');
            $product->descrption=$request->input('descrption');
            $product->category_id=$request->input('category_id');
            $product->save();




            return redirect()->route('product.all');




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
        $product=Product::findorfail($id);
        return view('product.update',compact('product'));
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
        $validate=Validator::make($request->all(),[
            'name'=>'required',
            'descrption'=>'required',

                    ]);
                    $pro=Product::find($id);
            if ($request->hasFile('image')) {
                $file=$request->file('image');

                //dd($file);
                $ext=$file->getClientOriginalExtension();
                $filenameee=time().'.'.$ext;

                $file->move('category/image', $filenameee);
                $pro->image=$filenameee;
            }

            

            $pro->name=$request->input('name');
            $pro->descrption=$request->input('descrption');

            $pro->update();

        return redirect()->route('product.all');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pro=Product::find($id);
        $pro->delete();
        return redirect()->route('product.all');
    }
}
