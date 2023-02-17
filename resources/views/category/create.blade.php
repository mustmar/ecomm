@extends('layouts.app')
@section('title','create')
@section('content')


         <form action="{{route('category.store')}}" method="post" enctype="multipart/form-data"  method="POST">
             @csrf
                @method('GET')
                <div class="row">
                    <div class="col-25">
                    <label for="fname">category name </label>
                    </div>
                    <div class="col-75">
                    <input type="text" id="fname" name="name" placeholder="cate name..">
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                    <label for="lname">description </label>
                    </div>
                    <div class="col-75">
                        <textarea name="descrption" id="" cols="30" rows="10"></textarea>
                    </div>
                </div>
                <div class="row">

                    <div class="col-75">
                        {{-- <input id="img" class="form-control filestyle margin images" data-input="false" type="file" data-buttonText="Upload Logo" data-size="sm" data-badge="false" onchange="uploadImage();" />
 --}}

                        <input type="file" name="image" class="form-control">
                    </div>
                <div class="row">
                    <input type="submit" value="Submit">
                </div>
         </form>



@endsection
