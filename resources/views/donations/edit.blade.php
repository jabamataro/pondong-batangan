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
                        <h2 class="section-heading">Personal Information</h2>
                        {{Form::label('name', 'Name')}}
                        {{Form::text('name', $donations->name, ['class' => 'form-control', 'placeholder' => 'Name'])}}
                        <br>
                        {{Form::label('address', 'Address')}}
                        {{Form::text('address', $donations->address, ['class' => 'form-control', 'placeholder' => 'Address'])}}
                    </div>
                    <div class="form-group">
                        <h2 class="section-heading">Donation Details</h2>
                        {{Form::label('amount', 'Amount')}}
                        {{Form::text('amount', $donations->amount, ['class' => 'form-control', 'placeholder' => 'Amount'])}}
                    </div>
                    <div class="form-group">
                        {{Form::label('type of Donation', 'Type of Donation')}}
                        <br>
                        @if($donations->cash == 1)
                            {{Form::radio('type', '1' , true)}} Cash
                            {{Form::radio('type', '0' , false)}} Bank
                        @else 
                            {{Form::radio('type', '1' , false)}} Cash
                            {{Form::radio('type', '0' , true)}} Bank
                        @endif
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
