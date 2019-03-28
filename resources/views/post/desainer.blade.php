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
                    <a class="nav-link" href="#">Programming</a>
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
                <img src="{{asset ('img/demo/desain1.jpg') }}" width="600" height="300" class="rounded-corners" style="margin-bottom:20px;">
                <h4 class="display-4">DESIGNER</h4>
                <br>
            </div>
    
                    <div class="container-fluid">
                      <div class="row content">
                        <div class="col-sm-3 sidenav">
                          <h4>Understanding the designer</h4><br>
                          <img src="{{asset ('img/demo/desain.jpg') }}" width="250" height="150">
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
                          <h3>What is a designer? Designer is</h3>
                          <p style="font-family:sans-serif,Georgia; font-size:18px;">
                                A designer is someone who designs or creates something based on
                                the imagination and creativity he has. The broadest definition of a designer is
                                those who create and plan a series of activities that aim to make things better.
                          </p>
                          <p style="font-family:sans-serif,Georgia; font-size:18px;">
                                Fashion Design

                                Is a field that is involved in a
                                 designer or designer in the scope of clothing only.
                                As for the work that will be done by a fashion designer such as 
                                creating and also designing a clothing and other attributes to be 
                                used comfortably and beautiful to look at. 
                                Designing size, shape, color, texture and so on are parts of clothing that can 
                                designed in such a way by a fashion designer.
                          </p>
                          <p style="font-family:sans-serif,Georgia; font-size:18px;">
                                Interior design

                                The interior design is a job to design the layout of the room to 
                                suit the needs and tastes of the customer.
                                Interior design also has elements or elements such as space, shape, color and texture 
                                that must be matched well so that it is comfortable to live in and function properly.
                                Usually an interior designer can recommend a beautiful room design with a 
                                variety of stunning decorations.
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