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
                @if (Session::has('message'))
                    <div class="alert alert-info">{{ Session::get('message') }}</div>
                @endif
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
                @if (count($cash) > 0)
                    <h2 class="section-heading">Donations through Cash</h2>
                    <table class="table">
                        <thead class="thead-dark">
                        <tr>
                            <th scope="col">Name</th>
                            <th scope="col">Address</th>
                            <th scope="col">Email</th>
                            <th scope="col">Contact</th>
                            <th scope="col">Amount</th>
                            <th scope="col">Mode</th>
                            <th scope="col">Encoded On</th>
                            <th scope="col">Reference Number</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($cash as $c)
                            <tr>
                                <td>{{$c->name}}</a></td>
                                <td>{{$c->address}}</td>
                                <td>{{$c->email}}</td>
                                <td>{{$c->contact}}</td>
                                <td>{{$c->amount}}</td>
                                <td>{{$c->mode}}</td>
                                <td>{{date('F d, Y', strtotime($c->created_at))}}</td>
                            <td><a href="/donations/{{$c->reference_number}}">{{$c->reference_number}}</a></td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                @else
                <h2 class="post-title">No Donations through Cash Found.</h2>
                @endif
                
            </div>
        </div>
    </div>
</div>
<hr>
<div class="content-section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-8 col-md-10 mx-auto">
                    @if (Session::has('message'))
                        <div class="alert alert-info">{{ Session::get('message') }}</div>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 col-md-10 mx-auto">
                    @if (count($bank) > 0)
                        <h2 class="section-heading">Donations through Bank</h2>
                        <table class="table">
                            <thead class="thead-dark">
                            <tr>
                                <th scope="col">Name</th>
                                <th scope="col">Address</th>
                                <th scope="col">Email</th>
                                <th scope="col">Contact</th>
                                <th scope="col">Amount</th>
                                <th scope="col">Mode</th>
                                <th scope="col">Deposited At</th>
                                <th scope="col">Encoded On</th>
                                <th scope="col">Reference Number</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($bank as $b)
                                <tr>
                                    <td>{{$b->name}}</a></td>
                                    <td>{{$b->address}}</td>
                                    <td>{{$b->email}}</td>
                                    <td>{{$b->contact}}</td>
                                    <td>{{$b->amount}}</td>
                                    <td>{{$b->mode}}</td>
                                    <td>{{date('F d, Y', strtotime($b->deposited_at))}}</td>
                                    <td>{{date('F d, Y', strtotime($b->created_at))}}</td>
                                    <td><a href="/donations/{{$b->reference_number}}">{{$b->reference_number}}</a></td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    @else
                        <h2 class="post-title">No Donations through Bank Found.</h2>
                    @endif
                    
                </div>
            </div>
        </div>
    </div>

@endsection