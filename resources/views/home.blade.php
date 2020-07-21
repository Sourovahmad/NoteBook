@extends('layout.app');
@section('content')
     


<div class="container pt-5">

 <div class="row">


  <div class="col col-4 ">


  <form>
  <div class="form-group">
    <label for="name">Name </label>
    <input type="text" class="form-control" name="name" placeholder="Enter Your Name">
  </div>
  </div>

  
  <div class="col col-4 ">


  <form method="POST" action="{{route('store')}}">
  <div class="form-group">
    <label for="exampleFormControlInput1">Email address</label>
    <input type="text" class="form-control" name="email" placeholder="Enter Your Email">
  </div>
  </div>

  <div class="col col-4 ">


  <form>
  <div class="form-group">
    <label for="exampleFormControlInput1">Enter Date</label>
    <input type="date" class="form-control" name="date" placeholder="name@example.com">
  </div>
  </div>


</div>


</div>

        
 


 
  <div class="col col-12 ">
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Example textarea</label>
    <textarea class="form-control" name="note" rows="5"></textarea>
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>


</form>
</div>



@endsection