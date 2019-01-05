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
                    <li class="breadcrumb-item"><a href="/donations">Donations</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Donations by {{$donations->name}} on {{date('F d, Y', strtotime($donations->created_at))}}</li>
                </ol>
            </nav>
            </p>
        </div>
    </div>
</div>

<article>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
                <h2 class="section-heading">Donated By {{$donations->name}}</h2>
                <h2 class="section-heading">Amount : Php {{ number_format($donations->amount, 2) }}</h2>
                @if($donations->cash == 1)
                    <h2 class="section-heading">Type of Donation : Cash </h2>
                @else
                    <h2 class="section-heading">Type of Donation : Bank </h2>
                @endif
                <p>{!!$donations->message!!}</p>
                <hr>
                <small><i>Donated on {{date('F d, Y', strtotime($donations->created_at))}}</i></small>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
                <hr>
                <a href="/donations/{{$donations->id}}/edit" class="btn btn-primary" style="text-decoration: none;">Edit</a>
                {!!Form::open(['action' => ['DonationsController@destroy', $donations->id], 'method' => 'POST', 'class' => 'float-right'])!!}
                    {{Form::hidden('_method', 'DELETE')}}
                    {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
                {!!Form::close() !!}
            </div>
        </div>
    </div>
</article>

@endsection
