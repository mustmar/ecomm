@extends('layouts.app')

@section('content')
{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif


                </div>

            </div>
        </div>
    </div>
</div> --}}
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
 <div>
    <a href="{{route('category.create')}}">New Category</a>
 </div>
    </div>
</center>


@endsection
