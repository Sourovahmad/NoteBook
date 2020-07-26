@extends('layout.app');
@section('content')


<div class="container">

  <div class="row">

    <div class="col col-3 ">
    

      <button type="button" id="sidebarCollapse" class="btn btn-info navbar-btn">
        <i class="glyphicon glyphicon-align-left"></i>
        <span>Toggle Sidebar</span>
      </button>

      <div class="wrapper">
        <!-- Sidebar Holder -->
        <nav id="sidebar">
     

          <ul class="list-unstyled components">
            <li class="active">
              <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false">
                <i class="glyphicon glyphicon-home"></i>
                Home
              </a>
              <ul class="collapse list-unstyled" id="homeSubmenu">
                <li><a href="#">Home 1</a></li>
                <li><a href="#">Home 2</a></li>
                <li><a href="#">Home 3</a></li>
              </ul>
            </li>
            <li>
              <a href="#">
                <i class="glyphicon glyphicon-briefcase"></i>
                About
              </a>
              <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false">
                <i class="glyphicon glyphicon-duplicate"></i>
                Pages
              </a>
              <ul class="collapse list-unstyled" id="pageSubmenu">
                <li><a href="#">Page 1</a></li>
                <li><a href="#">Page 2</a></li>
                <li><a href="#">Page 3</a></li>
              </ul>
            </li>
            <li>
              <a href="#">
                <i class="glyphicon glyphicon-link"></i>
                Portfolio
              </a>
            </li>
            <li>
              <a href="#">
                <i class="glyphicon glyphicon-paperclip"></i>
                FAQ
              </a>
            </li>
            <li>
              <a href="#">
                <i class="glyphicon glyphicon-send"></i>
                Contact
              </a>
            </li>
          </ul>

          <ul class="list-unstyled CTAs">
            <li><a href="" class="download">Go to abasas</a></li>
            <li><a href="" class="article">Back to abiut</a></li>
          </ul>
        </nav>


      </div>


    </div>
    <div class="col-9">
      <div class="row">

   <!-- DataTales Example -->
   <div class="card shadow mb-4">

<div class="card-header py-3 bg-abasas-dark">
    <nav class="navbar navbar-dark ">
        <a class="navbar-brand"> Your Notes  </a>
        <button type="button" class="btn btn-danger p-2 bd-highlight" data-toggle="modal" data-target="#exampleModalCenter">
              Add Note
            </button>
    </nav>
</div>
<div class="card-body">
    <div class="table-responsive">
        <table class="table table-striped table-bordered" id="myTable" width="100%" cellspacing="0">
            <thead class="bg-abasas-dark">


            <tr>
                <th>id</th>
                <th>name</th>
                <th>Date</th>
                <th>Note</th>
                <th>Action</th>

            </tr>
            </thead>
            <tbody>

            <?php $i = 1; ?>
            @foreach ($data as $level)
            <?php $id = $level->id; ?>
                <tr class="data-row">
                <td class="iteration">{{$i++}}</td>
                    <td class="  word-break name ">{{$level->name}}</td>
                    <td class=" word-break date ">{{$level->date}}</td>
                    <td class=" word-break note ">{{$level->email}}</td>
                  




                    <td class="align-middle">
                    <button type="button" class="btn btn-success btn-sm" id="level-edit-item" data-item-id={{$id}}> <i class="fa fa-edit" aria-hidden="false"> </i></button>
                       

                    <form method="POST" action="{{ route('destroy',  $level->id )}} " id="delete-form-{{ $level->id }}" style="display:none; ">
                                        {{csrf_field() }}
                                        {{ method_field("delete") }}
                                    </form>


                                    <button onclick="if(confirm('are you sure to delete this')){
                                        document.getElementById('delete-form-{{ $level->id }}').submit();
                                        }
                                        else{
                                        event.preventDefault();
                                        }
                                        " class="btn btn-danger btn-sm btn-raised">
                                        <i class="fa fa-trash" aria-hidden="false"></i>
                                    </button>
                        


                    </td>

                </tr>
        
            @endforeach
          
            </tbody>
        </table>
    </div>
</div>
</div>



</div>


<!-- creat item modal -->
<!-- Modal -->
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
                <textarea class="form-control" name="note" rows="5" col="10"></textarea>
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
            <input type="text" name="id" class="form-control" id="modal-input-id" >
          </div>
 
          <!-- name -->
          <div class="form-group">
            <label class="col-form-label" for="modal-input-name">Name</label>
            <input type="text" name="name" class="form-control" id="modal-input-name" >
          </div>
          <div class="form-group">
            <label class="col-form-label" for="modal-input-date">Date</label>
            <input type="date" name="date" class="form-control" id="modal-input-date" >
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











@endsection