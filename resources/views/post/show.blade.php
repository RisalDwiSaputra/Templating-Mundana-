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
<br>
<br>
<br>
<br>

<div class="container">
		<div class="jumbotron jumbotron-fluid mb-3 pl-0 pt-0 pb-0 bg-white position-relative">
			<div class="h-100 tofront">
				<div class="row justify-content-between">
					<div class="col-md-6 pt-6 pb-6 pr-6 align-self-center">
						<p class="text-uppercase font-weight-bold">
							<a class="text-danger" href="./category.html">Stories</a>
						</p>
						<h1 class="display-4 secondfont mb-3 font-weight-bold">{{ $post-> title }}</h1>
						<p class="mb-3">
							 Analysts told CNBC that the currency could hit anywhere between $1.35-$1.40 if the deal gets passed through the U.K. parliament.
						</p>
						<div class="d-flex align-items-center">
							<img class="rounded-circle" src="{{asset ('img/demo/avatar2.jpg') }}" width="70">
							<small class="ml-2">{{ $post-> Alamat}}<span class="text-muted d-block">{{ $post-> created_at}}</span>
							</small>
						</div>
					</div>
					<div class="col-md-6 pr-0">
						<img src="{{asset ('img/demo/intro.jpg') }}" width="547px" height="684px">
					</div>
				</div>
			</div>
		</div>
    </div>
    
    <div class="container pt-4 pb-4">
        <div class="row justify-content-center">
            <div class="col-lg-2 pr-4 mb-4 col-md-12">
                <div class="sticky-top text-center">
                    <div class="text-muted">
                            Do activities
                    </div>
                    <br>
                    <div class="share d-inline-block">
                        <!-- AddToAny BEGIN -->
                        <div class="a2a_kit a2a_kit_size_32 a2a_default_style" style="line-height: 32px;">
                            <form action="{{ route('post.destroy', $post) }}" method="post">
                                    {{ csrf_field() }}
                                    {{ method_field('DELETE') }}
                                <button type="submit" class="btn btn-md btn-danger">Hapus</button><br><br>
                               
                                <a href="{{route('post.edit', $post)}}" class="btn btn-md btn-warning">Edit</a>
                            
                        <div style="clear: both;"></div></div>
                    <script async="" src="https://static.addtoany.com/menu/svg/icons.29.svg.js"></script><script async="" src="https://static.addtoany.com/menu/page.js"></script>
                        <!-- AddToAny END -->
                </div>
            </div>
        </div>
            <div class="col-md-12 col-lg-8">
                <article class="article-post">
                        {{ ($post->content)}}
                </article>
                <br>
                <div class="border p-5 bg-lightblue">
                    <div class="row justify-content-between">
                        <div class="col-md-5 mb-2 mb-md-0">
                            <h5 class="font-weight-bold secondfont">Become a member</h5>
                             Get the latest news right in your inbox. We never spam!
                        </div>
                        <div class="col-md-7">
                            <div class="row">
                                <div class="col-md-12">
                                    <input type="text" class="form-control" placeholder="Enter your e-mail address">
                                </div>
                                <div class="col-md-12 mt-2">
                                    <button type="submit" class="btn btn-success btn-block">Subscribe</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
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

@endsection