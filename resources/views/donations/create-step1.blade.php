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
                <h2 class="section-heading">Personal Information</h2>
                <hr>
                <form action="/donations/create-step1" method="post">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" value="" class="form-control" id="nameInput" name="name">
                    </div>
                    <div class="form-group">
                        <label for="address">Adress</label>
                        <input type="text" value="" class="form-control" id="addressInput" name="address">
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" value="" class="form-control" id="emailInput" name="email">
                    </div>
                    <div class="form-group">
                        <label for="contact">Contact</label>
                        <input type="number" value="" class="form-control" id="contactInput" name="contact">
                    </div>
                    <button type="submit" class="btn btn-primary">Next</button>
                </form>
            </div>
        </div>
    </div>
</article>

@endsection