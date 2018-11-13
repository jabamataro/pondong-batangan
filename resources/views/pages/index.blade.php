@extends('layouts.app')

@section('content')
<header class="masthead" style="background-image: url('img/header.jpg')">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
                <div class="site-heading">
                    {{-- <h1>{{ $headerTitle }}</h1> --}}
                    <img src="img/logo.png" class="img-fluid mx-auto d-block" style="max-width: 200px;">
                    <span class="subheading">People of Pondong Batangan</span>
                </div>
            </div>
        </div>
    </div>
</header>

<section class="content-section divider-content">
    <div class="container text-center">
        <div class="row">
            <div class="col-lg-10 mx-auto">
                <q class="lead" style="font-size: 30px;"><i>Ang Pondong Batangan,
                        ang Mabuting Balita ng Kaganapan ng Buhay
                        para sa mga Batangueño!</i></q>
            </div>
        </div>
    </div>
</section>

{{-- @include('news.included_file')

<section class="content-section divider-content">
    <div class="container text-center">
        <div class="row">
            <div class="col-lg-10 mx-auto">
                <q class="lead" style="font-size: 30px;"><i>Fullness of life for every Batangueno</i></q>
            </div>
        </div>
    </div>
</section> --}}

<section class="showcase">
    <div class="container-fluid p-0">
        <div class="row no-gutters" style="background-color: #E1E6E1;">
            <div class="col-lg-6 order-lg-2 text-white showcase-img" style="background-image: url('img/1.jpg');"></div>
            <div class="col-lg-6 order-lg-1 my-auto showcase-text">
                <h2>About</h2>
                <blockquote class="blockquote">
                    <p class="mb-0"><b>Pondong Batangan</b> is an Evangelization Program for total human
                        development and a Community Foundation born of the Pastoral Vision of the Local Church in
                        Batangas.</p>

                </blockquote>
                <a href="/about"><button type="button" class="btn btn-primary">Learn More</button></a>
            </div>
        </div>
        <div class="row no-gutters">
            <div class="col-lg-6 text-white showcase-img" style="background-image: url('img/3.jpg');"></div>
            <div class="col-lg-6 my-auto showcase-text">
                <h2>History</h2>
                <blockquote class="blockquote">
                    <p class="mb-0">The concept of Pondo Batangan was based on an idea from Archbishop Gaudencio B.
                        Rosales which he started in his former archdiocese, the archdiocese of Lipa. The Pondong
                        Batangan was the fruit of the Lipa’s own archdiocesan pastoral assembly which produced the Aral
                        ng Batangueno, the blueprint for doing and living Pondong Batangan.</p>
                </blockquote>
                <a href="/history"><button type="button" class="btn btn-primary">Learn More</button></a>
            </div>
        </div>
        <div class="row no-gutters" style="background-color: #E1E6E1;">
            <div class="col-lg-6 order-lg-1 my-auto showcase-text">
                <h2>Teachings</h2>
                <blockquote class="blockquote">
                    <p class="mb-0">In this season of grace, we try to renew everyone's commitment to Pondong Batangan.
                        These Primers have been written
                        to instruct its spirits and practice. But they should also inspire Batanguenos in caring for
                        the poor and the needy. </p>
                </blockquote>
                <a href="/teachings/richman-poorman"><button type="button" class="btn btn-primary">Learn More</button></a>
            </div>
            <div class="col-lg-6 order-lg-1 my-auto showcase-text">
                <h2>Programs</h2>
                <blockquote class="blockquote">
                    <p class="mb-0"><b>Pondong Batangan</b> cares for Batanguenos. With its resources, it has managed
                        to support various programs or projects
                        to help the poor and the needy among them and to introduce development in their communities</p>
                </blockquote>
                <a href="/programs"><button type="button" class="btn btn-primary">Learn More</button></a>
            </div>
        </div>
    </div>
</section>


<section class="content-section">
        <div class="container text-center">
            <div class="row">
                <div class="col-lg-10 mx-auto">
                    <img src="img/logo.png" class="img-fluid mx-auto d-block">
                </div>
            </div>
        </div>
</section>
<hr>


@endsection
