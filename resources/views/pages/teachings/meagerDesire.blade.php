@extends('layouts.app')

@section('content')

<header class="masthead" style="background-image: url('img/#.jpg')">
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
                <p>The poor have incredibly humble desires. Their needs are simple. But
                    precisely because their demands are few, they are easily denied.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
                <p>It will take an extremely greedy and selfish individual to be threatened
                    by the loss of crumbs from his table. And that kind of greed need not
                    even be a monopoly of the rich man. Although many rich people can
                    be truly “greedy and would not even share even the scraps falling from
                    their meal tables”!</p>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
                <p>But the crumbs need not be lost and swept away. They can be
                    collected for those who have less.</p>
            </div>
        </div>
    </div>
</article>

@endsection