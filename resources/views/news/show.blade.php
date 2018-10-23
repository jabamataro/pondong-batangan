@extends('layouts.app')

@section('content')

<header class="masthead" style="background-image: url('img/ulatBatanganHeader.jpg')">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
                <div class="site-heading">
                    <h1>{{ $headerTitle }}</h1>
                </div>
            </div>
        </div>
    </div>
</header>

<div class="container-fluid">
    <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
            <p>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/news">News</a></li>
                    <li class="breadcrumb-item active" aria-current="page">{{ $news->title }}</li>
                </ol>
            </nav>
            </p>
        </div>
    </div>
</div>

<article>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
                <h2 class="section-heading">{{$news->title}}</h2>
                <p>{!!$news->body!!}</p>
                <hr>
                <small><i>Written on {{date('F d, Y', strtotime($news->created_at))}}</i></small>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
                <hr>
                <a href="/news/{{$news->id}}/edit" class="btn btn-primary" style="text-decoration: none;">Edit</a>
                {!!Form::open(['action' => ['NewsController@destroy', $news->id], 'method' => 'POST', 'class' => 'float-right'])!!}
                    {{Form::hidden('_method', 'DELETE')}}
                    {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
                {!!Form::close() !!}
            </div>
        </div>
    </div>
</article>

@endsection
