@extends('layout.app');
@section('content')




<div class="container  border border-dark p-5 h-100" style="padding-bottom:100px;">

<div class="row ">


  <div class="col col-4 ">


    <form method="POST" action="{{route('store')}}">

      @csrf
      <div class="form-group">
        <label for="name">Name </label>
        <input type="text" class="form-control" name="name" placeholder="Enter Your Name">
      </div>
  </div>




  <div class="col col-4 ">



    <div class="form-group">
      <label for="exampleFormControlInput1">Enter Date</label>
      <input type="date" class="form-control" name="date" placeholder="name@example.com">
    </div>
  </div>




<div class="col col-12  col-md-6 p-2">
<div class="form-group ">
  <label for="exampleFormControlTextarea1">Example textarea</label>
  <textarea class="form-control" name="note" rows="5"></textarea>
</div>

<button type="submit" class="btn btn-primary">Submit</button>


</form>
</div>


</div>


</div>
 

@endsection