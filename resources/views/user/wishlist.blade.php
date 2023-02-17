
@extends('admin.dash')
@section('title','wishlist')
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
        <h1> wishlist</h1 >

        <table class="table table-striped">

            <thead class="thead-dark">
            <tr>

                <th scope="col">user_id </th>

                <th scope="col">product name </th>
                <th scope="col">product description </th>

                <th scope="col">product price </th>
                <th scope="col">image </th>




            </tr>
            </thead>
            <tbody>



                @foreach ($wishlist as $item)
                    <tr>
                        <td>{{$item->user->id}}</td>
                        <td>{{$item->product->name}}</td>
                        <td>{{$item->product->descrption}}</td>

                        <td>{{'$'.$item->product->price}}</td>

                        <td> <img src="{{asset('product/image/'.$item->product->image) }}" alt="{{"image".$item->name}}" width="70"></td>


                    </tr>
                @endforeach

               
            </tbody>
        </table>
    </div>
</center>
@endsection


