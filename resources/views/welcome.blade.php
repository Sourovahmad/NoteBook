@extends('layout.app');
@section('content')

<div class="wrapper">
            <!-- Sidebar Holder -->
            <nav id="sidebar">
                <div class="sidebar-header">
                    <h3>Bootstrap Sidebar</h3>
                    <strong>BS</strong>
                </div>

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
                    <li><a href="https://bootstrapious.com/tutorial/files/sidebar.zip" class="download">Download source</a></li>
                    <li><a href="https://bootstrapious.com/p/bootstrap-sidebar" class="article">Back to article</a></li>
                </ul>
            </nav>



                <div class="container-fluid">
                
                 <div class="row">

              
                 <div class="col col-12">
                  

                 <div class="navbar-header">
                            <button type="button" id="sidebarCollapse" class="btn btn-info navbar-btn">
                                <i class="glyphicon glyphicon-align-left"></i>
                                <span>Toggle Sidebar</span>
                            </button>
                        </div>
                 
                 </div>




                 </div>
                
                </div>




                <div  class="container-fluid " id="printdata">
      
      <div class="row">



           <!--Today order  Card Example -->
 
           <div class="col-3 mb-4 text-center vtopCard">
        <div class="card  m-0 p-0 border border-dark">
         
          <div class="card-body">
            <div class="row no-gutters align-items-center">
              <div class="col ">
                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1   " style="font-size: 130%;"  >name </div>
             
                   
                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1" style="font-size: 100%;" >name 2</div>
                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1" style="font-size: 115%;"> price joto mon do</div>
                
              
              </div>

            </div>
          </div>
        </div>
      </div>







@endsection