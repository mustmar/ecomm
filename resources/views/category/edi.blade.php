@extends('layouts.category')
@section('title','create')
@section('content')

    <h1>update</h1>
         <form action="{{route('category.update',$cate->id)}}" method="post"  enctype="multipart/form-data">
             @csrf
                @method('post')
                <div class="row">
                    <div class="col-25">
                    <label for="fname">category name </label>
                    </div>
                    <div class="col-75">
                    <input type="text" id="fname" name="name" value="{{$cate->name}}">
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                    <label for="lname">description </label>
                    </div>
                    <div class="col-75">
                        <textarea name="descrption" id="" cols="30" rows="10">{{$cate->descrption}}</textarea>
                    </div>
                </div>
                <div class="row">

                    <div class="col-75">
                        <input type="file" name="image" >
                    </div>
                <div class="row">
                    <input type="submit" value="Submit">
                </div>
         </form>



@endsection
