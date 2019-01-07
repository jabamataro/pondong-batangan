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
                <h2 class="section-heading">Summary</h2>
                <hr>
                <form action="/donations/store" method="post">
                    {{ csrf_field() }}
                    @if ($donations->mode == 'Cash')
                        <table class="table">
                            <tr>
                                <td>Name:</td>
                                <td><strong>{{$donations->name}}</strong></td>
                            </tr>
                            <tr>
                                <td>Address:</td>
                                <td><strong>{{$donations->address}}</strong></td>
                            </tr>
                            <tr>
                                <td>Email:</td>
                                <td><strong>{{$donations->email}}</strong></td>
                            </tr>
                            <tr>
                                <td>Contact:</td>
                                <td><strong>{{$donations->contact}}</strong></td>
                            </tr>
                            <tr>
                                <td>Donation Amount:</td>
                                <td><strong>{{$donations->amount}}</strong></td>
                            </tr>
                            <tr>
                                <td>Type of Donation</td>
                                <td><strong>{{$donations->mode}}</strong></td>
                            </tr>
                            <tr>
                                <td>Reference Number:</td>
                                <td><strong>{{$donations->reference_number}}</strong></td>
                            </tr>
                        </table>
                        <a type="button" href="/donations/create-step3-cash" class="btn btn-primary">Back</a>
                    @elseif ($donations->mode == 'Bank')
                        <table class="table">
                            <tr>
                                <td>Name:</td>
                                <td><strong>{{$donations->name}}</strong></td>
                            </tr>
                            <tr>
                                <td>Address:</td>
                                <td><strong>{{$donations->address}}</strong></td>
                            </tr>
                            <tr>
                                <td>Email:</td>
                                <td><strong>{{$donations->email}}</strong></td>
                            </tr>
                            <tr>
                                <td>Contact:</td>
                                <td><strong>{{$donations->contact}}</strong></td>
                            </tr>
                            <tr>
                                <td>Donation Amount:</td>
                                <td><strong>{{$donations->amount}}</strong></td>
                            </tr>
                            <tr>
                                    <td>Type of Donation</td>
                                    <td><strong>{{$donations->mode}}</strong></td>
                            </tr>
                            <tr>
                                    <td>Deposited At</td>
                                    <td><strong>{{date('F d, Y', strtotime($donations->deposited_at))}}</strong></td>
                            </tr>
                            <tr>
                                <td>Reference Number:</td>
                                <td><strong>{{$donations->reference_number}}</strong></td>
                            </tr>
                        </table>
                        <a type="button" href="/donations/create-step3-bank" class="btn btn-primary">Back</a>
                    @endif
                    
                    <button type="submit" class="btn btn-primary">Next</button>
                </form>
            </div>
        </div>
    </div>
</article>

@endsection