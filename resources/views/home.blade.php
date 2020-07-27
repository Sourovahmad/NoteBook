@extends('layout.app')
@section('content')



      <!-- ======= Header ======= -->
      <header id="header" class="d-flex flex-column justify-content-center ">

        <nav class="nav-menu">
          <ul>
            <li class="active"><a href="#portfolio"><i class="fa fa-plus"></i> <span>Add</span></a></li>
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
            <input type="text" name="id" class="form-control" id="modal-input-id">
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




@endsection