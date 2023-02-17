
@extends('layouts.app')
@section('title','AllProducts')
@section('content')




<div class="card">
    <div class="card-body">

        <div class="table-responsive border rounded p-1">
            <h1> {{$categ->name}}</h1 >
            <table class="table">
                <thead>
                    <tr>

                        <th scope="col">product name </th>
                        <th scope="col">description </th>
                        <th scope="col">categoryname </th>
                        <th scope="col">price </th>
                        <th scope="col">Image </th>


                        <th scope="col">Edit</th>
                    </tr>
                </thead>
                <tbody>

                    @foreach ($proo as $item)
                    <tr>

                        <td>{{$item->name}}</td>
                        <td>{{$item->descrption}}</td>
                        <td>{{$item->Getcategory->name}}</td>
                        <td>{{'$'.$item->price}}</td>
                        <td><img src="{{asset('product/image/'.$item->image) }}" alt="{{"image".$item->name}}" width="50"></td>
                        <form action="{{route('cart.store',$item->id)}}">
                            <td>
                                @if ($item->quantity>0)

                                    <input type="number" name="quantity" placeholder="quantity item.." >
                                    <td><button  class="btn btn-primary"type="submit">AddToCart</button></td>
                                @else

                                    <span class="a-size-medium a-color-price">    Currently unavailable.   </span>
                                @endif
                            </td>


                        </form>
                        <td><a href="{{route('category.edit',$item->id)}}">Add To Wishlist</a></td>
                    </tr>

                @endforeach
                </tbody>
            </table>
        </div>



    </div>
</div>

{{-- @extends('admin.dash')



@section('title','AllCategory')
@section('content')



        <div class="card">
            <div class="card-body">

                <div class="table-responsive border rounded p-1">
                    <table class="table">
                        <thead>

                        </thead>
                        <tbody>

                        </tbody>
                    </table>
                </div>



            </div>
        </div>



@endsection
--}}


