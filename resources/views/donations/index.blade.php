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
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
                <p>@include('inc.messages')</p>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
                @if(count($donations) > 0)
                    @foreach ($donations as $d)
                        <div class="post-preview">
                            <a href="/donations/{{$d->id}}">
                                <h2 class="post-title">
                                    Donations by {{$d->donated_by}} on {{date('F d, Y', strtotime($d->created_at))}}
                                </h2>
                            </a>
                            {{-- <p class="post-meta">Written on {{date('F d, Y', strtotime($d->created_at))}}</p> --}}
                        </div>
                        <hr>
                    @endforeach
                    {{$donations->links()}}
                @else
                    <h2 class="post-title">No News Found.</h2>
                @endif
            </div>
        </div>
    </div>
</div>

@endsection