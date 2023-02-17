
@extends('admin.dash')
@section('title','cart')
@section('content')
<style>
    th, td {
        border-bottom:1px solid #ddd;
        padding: 10px;
        margin: 4px;
    }
    th {
    background-color: #04AA6D;
        color: white;

    }
    /* Google fonts import link */
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');
*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Poppins',sans-serif;
}
/* body{
  height: 100vh;
  width: 100%;
  display: flex;
  align-items: center;
  justify-content: center;
  background: #343F4F;
} */
.wrapper{
  height: 40px;
  min-width: 80px;
  display: flex;
  align-items: center;
  justify-content: center;
  background: #FFF;
  border-radius: 12px;
  box-shadow: 0 5px 10px rgba(0,0,0,0.2);
}
.wrapper span{
  width: 100%;
  text-align: center;
  font-size: 15px;
  font-weight: 60;
  cursor: pointer;
  user-select: none;
}
.wrapper span.num{
  font-size: 15px;
  border-right: 2px solid rgba(0,0,0,0.2);
  border-left: 2px solid rgba(0,0,0,0.2);
  pointer-events: none;
}

</style>
 <center>
        <h1> Cart</h1 >

        <table class="table table-striped">

            <thead class="thead-dark">
            <tr>

                <th scope="col">user_id </th>
                <th scope="col"> category name </th>
                <th scope="col">product_id </th>
                <th scope="col">product name </th>
                <th scope="col">productqty </th>



                <th scope="col">Edit</th>
                <th scope="col">pay</th>

            </tr>
            </thead>
            <tbody>



                @foreach ($cart as $item)
                    <tr>
                        <td>{{$item->user->id}}</td>
                        <td>{{$item->categoryname}}</td>
                        <td>{{$item->pro_id}}</td>
                        <td>{{$item->productname}}</td>
                        <td>{{$item->productqty}}</td>
                  
                        <td><a href="{{route('cart.delete',$item->id)}}">Delete</a></td>
                        <td><a href="{{route('payment')}}">paynow</a></td>

                    </tr>
                @endforeach


            </tbody>
        </table>
    </div>
</center>
@endsection


