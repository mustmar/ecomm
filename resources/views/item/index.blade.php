@extends('layouts.item')
@section('content')


<center>
    <h1>Items</h1>
    @foreach ($item as $ite)
    <div class="card" style="width: 18rem;">
        <img class="card-img-top" src="..." alt="Card image cap">
        <div class="card-body">
        <h5 class="card-title">{{$ite->name}}</h5>
        <p class="card-text">{{$ite->description}}</p>
        <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
    </div>

    @endforeach






</center>

@endsection
