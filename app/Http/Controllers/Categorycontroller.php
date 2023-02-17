<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Support\Facades\Validator;

class Categorycontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function inda()
    {

        return Category::with('getproduct')->get();
    }
    public function index()
    {
        $category=category::all();
        return view('category.index',compact('category'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('category.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $validate=$request->validate([
            'name'=>'required',
            'descrption'=>'required',
            'image'=>'required'
        ]);

        $cate= new Category();
        if($request->hasFile('image')) {
            $file=$request->file('image');

            //dd($file);
            $ext=$file->getClientOriginalExtension();
            $filenameee=time().'.'.$ext;

            $file->move('category/image',$filenameee);
            $cate->image=$filenameee;




        }

        $cate->name=$request->name;

       $cate->descrption=$request->descrption;
       $cate->save();






      return  redirect()->route('category.all');





    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cate=Category::find($id);
        return view('category.edi ')->with('cate',$cate);
    }

    public function show($id)
    {
        $cate=Category::FindOrFail($id);
        return view('category.item ');
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
            'image'=>'required'


        ]);

        $cate=Category::find($id);
        if($request->hasFile('image')) {
            $file=$request->file('image');

            //dd($file);
            $ext=$file->getClientOriginalExtension();
            $filenameee=time().'.'.$ext;

            $file->move('category/image',$filenameee);
            $cate->image=$filenameee;




        }
        $cate->name=$request->name;

        $cate->descrption=$request->descrption;
        $cate->save();





            return redirect()->route('category.all');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $categ=Category::FindOrFail($id);
        $categ->forcedelete($id );

        return redirect()->route('category.all');
    }

    public function catpro($id)
    {
        $categ=Category::FindOrFail($id);

        $proo=Product::where('category_id',$id)->get();
        return view('category.product',compact('categ','proo'));


    }






}
