@extends('layout.app');
@section('content')
        <!-- DataTales Example -->
        <div class="card shadow mb-4">

            <div class="card-header py-3 bg-abasas-dark">
                <nav class="navbar navbar-dark ">
                    <a class="navbar-brand">Level List</a>

                </nav>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered" id="dataTable1" width="100%" cellspacing="0">
                        <thead class="bg-abasas-dark">


                        <tr>
                            <th>#</th>
                            <th>firstname</th>
                            <th>lastname</th>
                            <th>email</th>
                            <th>phone</th>
                            <th>Action</th>

                        </tr>
                        </thead>
                        <tbody>

         
                        @foreach ($data as $level)
                         
                            <tr class="data-row">
                            <td class=" word-break id">{{$level->id}}</td>
                                <td class="  word-break name ">{{$level->name}}</td>
                                <td class=" word-break date ">{{$level->date}}</td>
                                <td class=" word-break note ">{{$level->email}}</td>
                              

            


                                <td class="align-middle">
                                <button type="button" class="btn btn-success" id="level-edit-item" data-item-id={{$id ?? ''}}> <i class="fa fa-edit" aria-hidden="false"> </i></button>

                                    


                                </td>

                            </tr>
                        @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>

 <!-- Attachment Modal -->
    <div class="modal fade" id="level-edit-modal" tabindex="-1" role="dialog" aria-labelledby="edit-modal-label" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title text-dark" id="edit-modal-label ">Edit Level</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body" id="attachment-body-content">
                    <form id="level-edit-form" class="form-horizontal" method="POST" action="">
                    @csrf
                      
                    <!-- id -->
                        <div class="form-group">
                            <label class="col-form-label" for="modal-input-id">Id </label>
                            <input type="text" name="id" class="form-control" id="modal-input-id" required readonly>
                        </div>
                        <!-- /id -->
                        <!-- name -->
                        <div class="form-group">
                            <label class="col-form-label" for="modal-input-name">name</label>
                            <input type="text" name="name" class="form-control" id="modal-input-name" required autofocus>
                        </div>

                        <div class="form-group">
                            <label class="col-form-label" for="modal-input-date">lastname</label>
                            <input type="text" name="date" class="form-control" id="modal-input-date" required autofocus>
                        </div>
                        <!-- /name -->  
                        <!-- description -->
                        <div class="form-group">
                            <label class="col-form-label" for="modal-input-note">email</label>
                            <input type="text" name="note" class="form-control" id="modal-input-note" required>
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