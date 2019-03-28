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
        <img src="{{asset ('img/demo/program.jpg') }}" width="600" height="300" class="rounded-corners" style="margin-bottom:20px;">
            <h4 class="display-4">Progamming</h4>
            <br>
        </div>

                <div class="container-fluid">
                  <div class="row content">
                    <div class="col-sm-3 sidenav">
                      <h4>Programming understanding</h4><br>
                      <img src="{{asset ('img/demo/program1.jpg') }}" width="250" height="150">
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
                      <h3>What is Programming? Programming is</h3>
                      <p style="font-family:sans-serif,Georgia; font-size:18px;">
                          Programming is a process of someone writing, repairing, testing,
                        and maintaining codes in making a computer program. 
                        These codes are written in a programming language that doesn't only have one type.
                      </p>
                      <p style="font-family:sans-serif,Georgia; font-size:18px;">
                          You can create a program with a programming language that might be different from 
                        your friend's language. It depends on what programming language you master in doing a 
                        system program. With you understand and are able to apply language directly into the 
                        program.
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