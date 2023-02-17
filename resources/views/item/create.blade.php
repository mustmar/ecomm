<form action="{{route('item.store')}}" method="POST">

    @csrf
    @method('put')
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

    <div class="form-group">
      <label for="exampleFormControlInput1">Insert img</label>
      <input type="file" class="form-control" name="path" >
    </div>
    <div class="form-group">
      <label for="exampleFormControlSelect1">Name</label>
        <input type="text" name="name">
    </div>

    <div class="form-group">
      <label for="exampleFormControlTextarea1"> {{ucfirst('description')}}</label>

            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="description"></textarea>
    </div>
    <button type="submit">create</button>
  </form>
