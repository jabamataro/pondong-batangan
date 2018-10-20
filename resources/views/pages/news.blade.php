@extends('layouts.app')

@section('content')

<header class="masthead" style="background-image: url('img/aboutHeader.jpg')">
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

<section class="content-section divider-content">
    <div class="container text-center">
        <div class="row">
            <div class="col-lg-10 mx-auto">
                <q class="lead" style="font-size: 30px;"><i>As a bridge for people and community development</i></q>
            </div>
        </div>
    </div>
</section>

<article>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
                <p><b>Pondong Batangan</b> cares for the Batanguenos. With its resources, it has managed
                    to support various programs or projects to help the poor and the needy among them and to
                    introduce development in their communities.</p>
                <a href="#">
                    <img class="img-fluid" src="img/3.jpg">
                </a>
                <hr>
            </div>
        </div>
    </div>
</article>

<article>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
                <h2 class="section-heading">Alalay sa Kabuhayan ng Pondong Batangan</h2>
                <p>The fund given out to groups or communities so they can give financial assistance to individual
                    families
                    who need seeds money to start a micro enterprise or livelihood projects.</p>
                <a href="#">
                    <img class="img-fluid" src="img/4.jpg">
                </a>
                <hr>
            </div>
        </div>
    </div>
</article>

<article>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
                <h2 class="section-heading">Galing Batangueno</h2>
                <p>The Vocational Training Program conceptualized and initiated by Pondong Batangan by which
                    group or communities can conduct vocational training courses. Normally, trainings are 
                    conducted in partnership with competent trainors or training institutions.
                </p>
                <a href="#">
                    <img class="img-fluid" src="img/4.jpg">
                </a>
                <hr>
            </div>
        </div>
    </div>
</article>

<article>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
                <h2 class="section-heading">Dumog Batangan</h2>
                <p>The <b>Scholarship Program</b> funded by Pondong Batangan. The Dumog Batangan scholars are enrolled
                    in partner schools to pursue college education.
                </p>
                <a href="#">
                    <img class="img-fluid" src="img/4.jpg">
                </a>
                <hr>
            </div>
        </div>
    </div>
</article>

<article>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
                <h2 class="section-heading">Sipag Batangueno</h2>
                <p>These are social enterprises of Batangueno communities. Their members are given trainings for various
                    business undertakings as well as initial fundings to benefit them and the wider community itself. 
                </p>
                <a href="#">
                    <img class="img-fluid" src="img/4.jpg">
                </a>
                <hr>
            </div>
        </div>
    </div>
</article>

<article>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
                <p>Aside from projects or programs conceptualized by Pondong Batangan or initiated by parishes and
                    church groups, funding is also given to "worthy" projects proposed and implemented by 
                    Civil Society Organizations (CSOs).
                </p>
                <a href="#">
                    <img class="img-fluid" src="img/4.jpg">
                </a>
                <hr>
            </div>
        </div>
    </div>
</article>

<section class="content-section divider-content">
    <div class="container text-center">
        <div class="row">
            <div class="col-lg-10 mx-auto">
                <q class="lead" style="font-size: 30px;"><i>The dream of <b>fullness of life</b>
                    for the Batanguenos is within our reach because of <b>Pondong Batangan</b></i></q>
            </div>
        </div>
    </div>
</section>

@endsection
