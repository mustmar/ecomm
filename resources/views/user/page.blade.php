@extends('admin.dash')
{{--     @section('content')
        <style>
            table{
                border-bottom:1px solid #ddd;
            }
            th, td {
                border-bottom:1px solid #ddd;
            }
            th {
            background-color: #c2a628;
                color: white;

            }
        </style>
        <center>
            <div class="containar">
                <h1>All Category</h1>
                <table class="table table-striped">

                    <thead class="thead-dark">
                    <tr>
                        <th scope="col">id </th>
                        <th scope="col">Category name </th>
                        <th scope="col">description </th>
                        <th scope="col">Image </th>

                        <th scope="col">Edit</th>
                    </tr>
                    </thead>
                    <tbody>
                        {{$i=0}}
                        @foreach ($proo as $item)
                        <tr>

                            <td>{{$item->name}}</td>
                            <td>{{$item->descrption}}</td>
                            <td>{{$item->Getcategory->name}}</td>
                            <td>{{'$'.$item->price}}</td>
                            <td><img src="{{asset('product/image/'.$item->image) }}" alt="{{"image".$item->name}}" width="70"></td>



                            <td><a href="{{route('cart.store',$item->id)}}">Add To Cart</a></td>
                            <td><a href="{{route('category.edit',$item->id)}}">Add To Wishlist</a></td>
                        </tr>
                    @endforeach



                    </tbody>


                </table>

            </div>
        </center>
















    @endsection
 --}}
