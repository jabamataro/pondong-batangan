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

<div class="content-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
                <p>@include('inc.messages')</p>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
                @if(count($news) > 0)
                    @foreach ($news as $n)
                        <div class="post-preview">
                            <a href="/news/{{$n->id}}">
                                <h2 class="post-title">
                                    {{$n->title}}
                                </h2>
                            </a>
                            <p class="post-meta">Written on {{date('F d, Y', strtotime($n->created_at))}}</p>
                        </div>
                        <hr>
                    @endforeach
                    {{$news->links()}}
                @else
                    <h2 class="post-title">No News Found.</h2>
                @endif
            </div>
        </div>
    </div>
</div>

@endsection
