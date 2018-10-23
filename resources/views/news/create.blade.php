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
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
                <p>@include('inc.messages')</p>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
                <p>
                {!! Form::open(['action' => 'NewsController@store', 'method' => 'POST']) !!}
                    <div class="form-group">
                        {{Form::label('title', 'Title')}}
                        {{Form::text('title', '', ['class' => 'form-control', 'placeholder' => 'Title'])}}
                    </div>
                    <div class="form-group">
                            {{Form::label('body', 'Body')}}
                            {{Form::textarea('body', '', ['id' => 'article-ckeditor', 'class' => 'form-control', 'placeholder' => 'Body'])}}
    
                    </div>
                    {{Form::submit('Submit', ['class' => 'btn btn-primary float-right'])}}
                {!! Form::close() !!}
                </p>
            </div>
        </div>
    </div>
</article>



@endsection
