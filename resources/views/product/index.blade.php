
@extends('admin.dash')
@section('title','AllProducts')
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
        <h1> all products</h1 >
            <link href="{{ asset('Frontend/css/bootstrap.css') }}" rel="stylesheet">


                    <div class="container">
                        <div class="row float-left">
                            @foreach ($products as $item)
                                <div class="col ml-2 pa-2">
                                    <div class="card" style="width: 18rem;">
                                        <form action="{{route('cart.store',$item->id)}}">
                                            <img src="{{asset('product/image/'.$item->image) }}" alt="{{"image".$item->name}}" width="70">
                                            <div class="card-body">
                                            <h5 class="card-title">productname:<br>{{$item->name}}</h5>
                                            <p class="card-text">description:<br>{{$item->descrption}}</p>
                                            <p class="card-text">{{$item->price}}</p>

                                            <p class="card-text"> categoryname:<br>{{$item->Getcategory->name}}</p>
                                            @if ($item->quantity>0)

                                                <input type="number" name="quantity" placeholder="quantity item.." >
                                                <button  class="btn btn-primary"type="submit">AddToCart</button>
                                            @else

                                                <span class="a-size-medium a-color-price">    Currently unavailable.   </span>

                                            @endif
                                            <br>
                                            @if (Auth::user()->role==1)
                                                <a href="{{route('product.edit',$item->id)}}"class="btn btn-success">Edit</a>


                                            @endif

                                        </form>
                                        <a href="{{route('wishlist.store',$item->id)}}"class="btn btn-primary">Add To Wishlist</a>
                                        </div>

                                    </div>

                                </div>
                            @endforeach
                        </div>
                    </div>




            </tbody>
        </table>
    </div>
</center>
@endsection


