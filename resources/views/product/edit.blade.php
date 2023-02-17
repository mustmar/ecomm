
@extends('layouts.app')
@section('title','Create')
@section('content')
<style>

    th, td {
        border-bottom:1px solid #ddd;
    }
    th {
        background-color: #04AA6D;
        color: white;

    }
</style>
<center>
        <h1> Create Product</h1 >
            <link href="{{ asset('Frontend/css/bootstrap.css') }}" rel="stylesheet">

                    <div class="container">
                        <div class="row">

                                <div class="col m-2 pa-2">
                                    <div class="card m-2 pa-2" style="width: 30rem;">

                                         <form action="{{route('product.edit')}}" method="post"  enctype="multipart/form-data">
                                                @csrf
                                                @method('GET')

                                                <div class="row m-2 pa-2">
                                                    <label for="pet-select">choose category</label>

                                                        <select name="category_id" id="pet-select">
                                                            <option value="">--Please choose an option--</option>
                                                            @foreach ($category as $ite )
                                                                <option  value="{{$ite->id}}" >{{$ite->name}}</option>
                                                            @endforeach


                                                        </select>

                                                    <div class="col m-2 pa-2"><br>
                                                    <label for="fname">product name </label>
                                                    </div>
                                                    <div class="col-75 m-2 pa-2">
                                                    <input type="text" id="fname" name="name" placeholder="product name..">
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-25">
                                                    <label for="lname">price </label>
                                                    </div>

                                                    <div class="col-75">
                                                        <input type="number" name="price" placeholder="product price.." >
                                                        </div>

                                                            <div class="col-25">
                                                                <label for="lname">description </label>
                                                                </div>
                                                    <div class="col-75">
                                                        <textarea name="descrption" id="" cols="30" rows="10"></textarea>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-25">
                                                        <label for="lname">quantity </label>
                                                    </div>

                                                    <div class="col-75">
                                                        <input type="number" name="quantity" placeholder="product quantity.." >
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

                                    </div>
                                </div>
                        </div>

                    </div>

</center>
@endsection


