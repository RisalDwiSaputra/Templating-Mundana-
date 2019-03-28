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

<br>
<br>

<div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card mb-3">
                <div class="card-header">Internship Form</div>
            <br>
            <div class="container">
            <form action="{{ route('post.store') }}" method="post">
            {{ csrf_field() }}
            <div class="form-group has-feedback{{ $errors->has('title') ? 'invalid' : '' }}">
                <label for="">Your Name</label>
            <input type="text" class="form-control" name="title" placeholder="your name..." value="{{ old('title') }}">
                @if($errors->has('title'))
                    <span class="help-block">
                        <p>{{$errors->first('title')}}</p>
                    </span>
                @endif
            </div>
            <div class="form-group ">
                <label for="">Profession</label>
                <select name="category_id"  class="form-control">
                    @foreach($categories as $category)
                        <option value="{{ $category->id}}">{{$category->name}}</option>
                    @endforeach
                </select>
            </div>
            <br>
            <div class="form-group has-feedback{{ $errors->has('Alamat') ? 'invalid' : '' }}">
                <label for="">Address</label>
                <input type="text" class="form-control" name="Alamat" placeholder="Alamat Anda..." value="{{ old('Alamat') }}">
                    @if($errors->has('Alamat'))
                        <span class="help-block">
                            <p>{{$errors->first('Alamat')}}</p>
                        </span>
    
                    @endif
            </div>
            <div class="form-group has-feedback{{ $errors->has('content') ? 'invalid' : '' }}">
                <label for="">Your Experience</label>
                <textarea name="content" rows="5" class="form-control" placeholder="Isi Your Experience...">{{ old('content') }}</textarea>
                    @if($errors->has('content'))
                    <span class="help-block">
                        <p>{{$errors->first('content')}}</p>
                    </span>

                    @endif
            </div>

            <div class="form-group">
               <input type="submit" value="Save" class="btn btn-primary">
               <a href="{{route('home')}}" class="btn btn-xs btn-default">Batal</a>
            </div>
        </form>
    </div>
 </div>
</div>
</div>
@endsection