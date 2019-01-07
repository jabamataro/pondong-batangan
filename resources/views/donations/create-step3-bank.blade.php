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
                <h2 class="section-heading">Important Information</h2>
                <hr>
                <form action="/donations/create-step3-bank" method="post">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="name">Amount</label>
                        <input type="number" value="" class="form-control" id="amountInput" name="amount">
                        <label for="name">Deposited At</label>
                        <input type="date" value="" class="form-control" name="deposited_at" id="depositedAtInput">
                        <input type="hidden" value="{{ strtoupper(uniqid("PBBANK")) }}" name="reference_number">
                        <input type="hidden" value="Bank" name="mode">
                    </div>
                    <button type="submit" class="btn btn-primary">Next</button>
                </form>
            </div>
        </div>
    </div>
</article>

@endsection