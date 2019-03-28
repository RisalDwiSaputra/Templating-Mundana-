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
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            @foreach ($posts as $post)
            <div class="card mb-3">
                <div class="card-header">
                    <a href="{{route('post.show', $post)}}">{{ $post-> title }}</a>

                    <div class="float-right">
                        <form action="{{ route('post.destroy', $post) }}" method="post">
                            {{ csrf_field() }}
                            {{ method_field('DELETE') }}
                        <button type="submit" class="btn btn-sm btn-danger">Hapus</button>
                        <a href="{{route('post.edit', $post)}}" class="btn btn-xs btn-warning">Ubah</a>
                    </div>
                   
                </div>

                <div class="card-body">
                        <p>Your Addres On  {{ $post-> Alamat}}</p>
                        <p>{{ str_limit($post->content,100,'....')}}</p>
                </div>

            </div>
            @endforeach
        </div>
    </div>
</div>
   
@endsection