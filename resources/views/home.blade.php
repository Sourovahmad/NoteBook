@extends('layout.app')
@section('content')


<div id="fullbody">


<!-- ======= Header ======= -->
<header id="header" class="d-flex flex-column justify-content-center ">

  <nav class="nav-menu">
    <ul>
      <li class="active"><a href="#portfolio"  data-toggle="modal" data-target="#exampleModalCenter"><i class="fa fa-plus"></i> <span>Add</span></a>
   
      <li class=""><a href="#hero"><i class="fa fa-home"></i> <span>Home</span></a></li>
      <li><a href="#about"><i class="fa fa-user"></i> <span>About Abasas</span></a></li>
      <li><a href="#resume"><i class="fa fa-book"></i> <span>Resume</span></a></li>

      <li><a href="#services"><i class="fa fa-server"></i> <span>Services</span></a></li>
      <li><a href="#contact"><i class="fa fa-envelope"></i> <span>Contact</span></a></li>
    </ul>
  </nav><!-- .nav-menu -->

</header><!-- End Header -->

<!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex flex-column justify-content-center">

 
  <div class="container-fluid p-5">
  <div class="section-title">
    <h2>Your NOTE</h2>
  </div>

    <div class="row">

    @foreach ($data as $all)
    @php
    $id = $all->id;
    @endphp
      <div class="card-deck mb-2 text-center">


        <div class="card mb-4 mr-4 box-shadow">
          <div class="card-header">
            <h4 class="my-0 font-weight-normal">{{$all->name}}</h4>
          </div>
          <div class="card-body">
          <h1 class="card-title pricing-card-title name{{$all->id}}" style="font-size: 20px;"> {{$all->date}}</h1>
                   
            <textarea class="mt-4 mb-2" name="note" id="" >
              {{$all->note}} 
            </textarea>


                      </div>
                      
            <div class="btn-group align-middle" role="group" ">
            <button type="button" class="btn btn-success btn-sm mr-1" id="level-edit-item" data-item-id={{$id}}> <i class="fa fa-edit" aria-hidden="false"> </i></button>
          
          <form method="POST" action="{{ route('destroy',  $all->id )}} " id="delete-form-{{ $all->id }}" style="display:none; ">
                        {{csrf_field() }}
                        {{ method_field("delete") }}
                      </form>


                      <button onclick="if(confirm('are you sure to delete this')){
                                        document.getElementById('delete-form-{{ $all->id }}').submit();
                                        }
                                        else{
                                        event.preventDefault();
                                        }
                                        " class="btn btn-danger btn-sm btn-raised">
                        <i class="fa fa-trash" aria-hidden="false"></i>
                      </button>

          </div>
          
        </div>


      </div>
     
      @endforeach



    </div>
  </div>

 


</section>




<!-- creat item modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle">Add Note</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="container  border border-dark p-5 h-100" style="padding-bottom:100px;">

          <div class="row ">


            <div class="col col-6 ">


              <form method="POST" action="{{route('store')}}">

                @csrf
                <div class="form-group">
                  <label for="name">Name </label>
                  <input type="text" class="form-control" name="name" placeholder="Enter Your Name">
                </div>
            </div>




            <div class="col col-6 ">



              <div class="form-group">
                <label for="exampleFormControlInput1">Enter Date</label>
                <input type="date" class="form-control" name="date" placeholder="name@example.com">
              </div>
            </div>




            <div class="col col-12  col-md-6 p-2">
              <div class="form-group ">
                <label for="exampleFormControlTextarea1">Enter Text</label>
                <textarea class="form-control border border-success" name="note" rows="5" col="10"></textarea>
              </div>




            </div>


          </div>


        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Submit</button>

        </form>
      </div>
    </div>
  </div>
</div>


 <!-- Attachment Modal -->
 <div class="modal fade" id="level-edit-modal" tabindex="-1" role="dialog" aria-labelledby="edit-modal-label" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-dark" id="edit-modal-label ">Edit Your Note</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" id="attachment-body-content">
        <form id="level-edit-form" class="form-horizontal" method="POST" action="">
          @csrf


          <!-- id -->
          <div class="form-group">
            <label class="col-form-label" for="modal-input-id">Id </label>
            <input type="text" name="id" class="form-control" id="modal-input-id" readonly>
          </div>

          <!-- name -->
          <div class="form-group">
            <label class="col-form-label" for="modal-input-name">Name</label>
            <input type="text" name="name" class="form-control" id="modal-input-name">
          </div>
          <div class="form-group">
            <label class="col-form-label" for="modal-input-date">Date</label>
            <input type="date" name="date" class="form-control" id="modal-input-date">
          </div>


          <div class="form-group ">
            <label for="modal-input-note"> textarea</label>
            <textarea class="form-control" name="note" id="modal-input-note" rows="5"></textarea>
          </div>
          <div class="form-group">
            <input type="submit" value="Submit" class="form-control btn btn-success">
          </div>
          <!-- /description -->
        </form>
      </div>

    </div>
  </div>
</div>

<!-- End of all modal -->


 </div>

@endsection