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

<article>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
                <p>@include('inc.messages')</p>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
                <p>
                {!! Form::open(['action' => ['DonationsController@update', $donations->id], 'method' => 'POST']) !!}
                <div class="form-group">
                        {{Form::label('donated_by', 'Donated By')}}
                        {{Form::text('donated_by', '', ['class' => 'form-control', 'placeholder' => 'Donated By'])}}
                    </div>
                    <div class="form-group">
                            {{Form::label('amount', 'Amount')}}
                            {{Form::text('amount', '', ['class' => 'form-control', 'placeholder' => 'Amount'])}}
                    </div>
                    <div class="form-group">
                            {{Form::label('message', 'Message')}}
                            {{Form::textarea('message', '', ['id' => 'article-ckeditor', 'class' => 'form-control', 'placeholder' => 'Message'])}}
    
                    </div>
                    {{Form::hidden('_method', 'PUT')}}
                    {{Form::submit('Submit', ['class' => 'btn btn-primary float-right'])}}
                {!! Form::close() !!}
                </p>
            </div>
        </div>
    </div>
</article>



@endsection
