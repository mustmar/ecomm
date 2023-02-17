

@extends('layouts.app')



@section('title','Users')
@section('content')



        <div class="card">
            <div class="card-body">
                <div class="d-sm-flex align-items-center mb-4">
                    <h4 class="card-title mb-sm-0">Users</h4>

                    <a href="{{route('dashboard')}}" class="text-dark ml-auto mb-3 mb-sm-0"> dashboard</a>
                </div>
                <div class="table-responsive border rounded p-1">
                    <table class="table">
                        <thead>
                            <tr>
                                                    <th scope="col"> id </th>
                                                        <th scope="col">name </th>
                                                        <th scope="col">email </th>
                                                        <th scope="col">noproduct </th>
                                                        <th scope="col">role </th>

                                                        <th scope="col">Edit</th>
                            </tr>
                        </thead>
                        <tbody>


                                                    @foreach ($users as $item)
                                                        <tr>
                                                            <th scope="row">{{$item->id}}</th>
                                                            <td>{{$item->name}}</td>
                                                            <td>{{$item->email}}</td>
                                                            @if ($item->role==1)
                                                              <td>Admin</td>
                                                            @else
                                                            <td>Normal</td>
                                                            @endif

                                                            {{-- <td>{{$item->nom}}</td> --}}
                                                          {{--   <td><img src="{{asset('category/image/'.$item->image) }}" alt="kk" width="70"></td> --}}


                                                            {{-- <td><a href="{{route('category.delete',$item->id)}}">Delete</a></td>
                                                            <td><a href="{{route('category.edit',$item->id)}}">edit</a></td> --}}
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
