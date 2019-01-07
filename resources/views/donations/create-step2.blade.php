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
                <h2 class="section-heading">Mode of Donation</h2>
                <hr>
                <form action="/donations/create-step2" method="post">
                    {{ csrf_field() }}
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="modeRadio" value="Cash" checked>
                        <label class="form-check-label" for="modeRadio">
                            Cash
                        </label>
                        <br>
                        <input class="form-check-input" type="radio" name="modeRadio" value="Bank">
                        <label class="form-check-label" for="modeRadio">
                            Through Bank
                        </label>
                    </div>
                    <br>
                    <button type="submit" class="btn btn-primary">Next</button>
                </form>
            </div>
        </div>
    </div>
</article>

@endsection