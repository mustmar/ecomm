

@extends('admin.dash')



@section('title','AllCategory')
@section('content')



        <div class="card">
            <div class="card-body">
                <div class="d-sm-flex align-items-center mb-4">
                    <h4 class="card-title mb-sm-0">Products Inventory</h4>

                    <a href="{{route('product.all')}}" class="text-dark ml-auto mb-3 mb-sm-0"> View all Products</a>
                </div>
                <div class="table-responsive border rounded p-1">
                    <table class="table">
                        <thead>
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
                                                    @foreach ($category as $item)
                                                        <tr>
                                                            <th scope="row">{{$i+=1}}</th>
                                                            <td><a href="{{route('category.product',$item->id)}}">{{$item->name}}</a></td>
                                                            <td>{{$item->descrption}}</td>
                                                            <td><img src="{{asset('category/image/'.$item->image) }}" alt="kk" width="70"></td>


                                                            <td><a href="{{route('category.delete',$item->id)}}">Delete</a></td>
                                                            <td><a href="{{route('category.edit',$item->id)}}">edit</a></td>
                                                        </tr>
                                                    @endforeach



                        </tbody>
                    </table>
                </div>

                <div class="d-sm-flex align-items-center mb-4">
                                        <a href="{{route('category.create')}}">New Category</a>
                </div>

            </div>
        </div>












@endsection
