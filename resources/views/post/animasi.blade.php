@extends('layouts.app')
@section('content')
<nav class="topnav navbar navbar-expand-lg navbar-light bg-white fixed-top">
        <div class="container">
            <a class="navbar-brand" href="./index.html"><strong>Mundana</strong></a>
            <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="navbar-collapse collapse" id="navbarColor02" style="">
                <ul class="navbar-nav mr-auto d-flex align-items-center">
                    <li class="nav-item">
                    <a class="nav-link" href="home">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="">Programming</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="#">Desaigner</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="#">Arsitektur</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="#">Animasi</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="./docs.html">Template <span class="badge badge-secondary">docs</span></a>
                    </li>
                </ul>
            </div>
        </div>
        </nav>
<div class="jumbotron jumbotron-fluid" style="padding-top:50px; padding-bottom:50px;">
        <div class="container text-center"> 
        <img src="{{asset ('img/demo/animasi.gif') }}" width="600" height="300" class="rounded-corners" style="margin-bottom:20px;">
            <br>
        </div>

                <div class="container-fluid">
                  <div class="row content">
                    <div class="col-sm-3 sidenav">
                      <h4>understanding of aniamation</h4><br>
                      <img src="{{asset ('img/demo/animasi1.jpg') }}" width="250" height="150">
                      <br>
                      <br>
                      <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search Blog..">
                        <span class="input-group-btn">
                          <button class="btn btn-default" type="button">
                            <span class="glyphicon glyphicon-search"></span>
                          </button>
                        </span>
                      </div>
                    </div>
                
                    <div class="col-sm-9">
                      <h4><small>RECENT POSTS</small></h4>
                      <hr>
                      <h3>What is animation? animation is ...</h3>
                      <p style="font-family:sans-serif,Georgia; font-size:18px;">
                            Animation is a moving image shaped from a set of objects (images) 
                            arranged in an orderly manner following the flow of motion that has been
                             determined in each time count increment that occurs. These images can be 
                             images of living things, inanimate objects, or writing.

 

                            Animation comes from English, which is animate which means to turn on,
                             give life and make inanimate objects. Animation is the process of making 
                             objects originating from dead objects, then arranged in different positions as 
                             if they were alive. In animation there are two important objects, namely objects 
                             or images and flow of motion.
                            
                             
                            
                            Animation in general can be said as an image sequence that is displayed on 
                            a certain timeline so that it creates an illusion of moving images.
                      </p>
                      
                    </div>
                  </div>
                </div>
                
                <br>
                <footer class="container-fluid">
                  <div>
                    <span class="navbar-brand mr-1"><strong>Mundana</strong></span> Copyright &copy;
                    <script>document.write(new Date().getFullYear())</script>
                     . All rights reserved.
                </div>
                </footer>
</div>
@endsection