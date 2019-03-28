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
                    <a class="nav-link" href="/home">Home <span class="sr-only">(current)</span></a>
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
                <ul class="navbar-nav ml-auto d-flex align-items-center">
                    <li class="nav-item highlight">
                        <a class="nav-link" href="{{route('post.create')}}">{{ __('New Story') }}</a>
                    </li>
                    <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>
            
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();">
                                    {{ __('Keluar') }}
                                </a>
            
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>
                </ul>
            </div>
        </div>
        </nav>
        <!-- End Navbar -->
            
            
        <!--------------------------------------
        HEADER
        ---------------------------------------->
            <div class="container">
                    <div class="jumbotron jumbotron-fluid mb-3 pt-0 pb-0 bg-lightblue position-relative">
                        <div class="pl-4 pr-0 h-100 tofront">
                            <div class="row justify-content-between">
                                <div class="col-md-6 pt-6 pb-6 align-self-center">
                                    <h1 class="secondfont mb-3 font-weight-bold">Mundana is a CRUD HTML Bootstrap for apprenticeship forms</h1>
                                    <p class="mb-3">
                                            Forms are worksheets that contain absolute information with certain row lines as fill media
                                    </p>
                                    <a href="./article.html" class="btn btn-dark">Read More</a>
                                </div>
                                <div class="col-md-6 d-none d-md-block pr-0" style="background-size:cover;background-image:url(./assets/img/demo/home.jpg);">	</div>
                            </div>
                        </div>
                    </div>
                </div>
        <!--------------------------------------
         END HEADER
        ---------------------------------------->
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-md-8">
                    <h5 class="font-weight-bold spanborder"><span>All Stories</span></h5>
                        @foreach ($posts as $post)
                        <div class="mb-3 d-flex justify-content-between">
                            <div class="pr-3">
                                <h2 class="mb-1 h4 font-weight-bold">
                                <a class="text-dark" href="{{route('post.show', $post)}}">{{ $post-> title }}</a>
                                </h2>
                                <p>{{ str_limit($post-> content,100,'....')}}</p>
                                <p>
                                    {{ $post-> Alamat}} <br>
                                    {{ $post-> created_at}}
                                </p>    
                            </div>
                        </div>                                 
                        @endforeach
                       
                </div>
                <div class="col-md-4 pl-4">
                    <h5 class="font-weight-bold spanborder"><span>Popular</span></h5>
                    <ol class="list-featured">
                        <li>
                        <span>
                        <h6 class="font-weight-bold">
                        <a href="{{route('post.program')}}" class="text-dark">What is the Programmer?</a>
                        </h6>
                        <p class="text-muted">
                            the meaning of programming...
                        </p>
                        </span>
                        </li>
                        
                        
                        <li>
                        <span>
                        <h6 class="font-weight-bold">
                        <a href="{{route('post.desainer')}}" class="text-dark">What is a designer?</a>
                        </h6>
                        <p class="text-muted">
                            the meaning of designer...
                        </p>
                        </span>
                        </li>
                    
                        
                        <li>
                        <span>
                        <h6 class="font-weight-bold">
                        <a href="{{route('post.arsitek')}}" class="text-dark">What is architecture?</a>
                        </h6>
                        <p class="text-muted">
                            architecture is ...
                        </p>
                        </span>
                        </li>
                        
                        
                        <li>
                        <span>
                        <h6 class="font-weight-bold">
                        <a href="{{route('post.animasi')}}" class="text-dark">What is animation?</a>
                        </h6>
                        <p class="text-muted">
                            animation is...
                        </p>
                        </span>
                        </li>
                    </ol>
                </div>
            </div>
        </div>
            
        <!--------------------------------------
        FOOTER
        ---------------------------------------->
        <div class="container mt-5">
            <footer class="bg-white border-top p-3 text-muted small">
            <div class="row align-items-center justify-content-between">
                <div>
                    <span class="navbar-brand mr-2"><strong>Mundana</strong></span> Copyright &copy;
                    <script>document.write(new Date().getFullYear())</script>
                     . All rights reserved.
                </div>
                <div>
                    Made with <a target="_blank" class="text-secondary font-weight-bold" href="https://www.wowthemes.net/mundana-free-html-bootstrap-template/">Mundana Theme</a> by WowThemes.net.
                </div>
            </div>
            </footer>
        </div> 
        <!-- End Footer -->
    
@endsection
