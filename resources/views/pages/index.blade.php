@extends('layouts.app')

@section('content')
<header class="masthead" style="background-image: url('img/header.jpg')">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
                <div class="site-heading">
                    <h1>People of Pondong Batangan</h1>
                </div>
            </div>
        </div>
    </div>
</header>

<section class="content-section" style="background-color: #E1E6E1;">
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

<div class="content-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
                <h2>Ulat Batangan</h2>
                <div class="post-preview">
                    <a href="post.html">
                        <h2 class="post-title">
                            Ang Pag-uusig sa Simbahan, ang Paghihirap ng mga Dukha at ang
                            Pagliligtas ng Diyos
                        </h2>
                    </a>
                    <p class="post-meta">Posted by
                        <a href="#">Admin</a>
                        on July 2018</p>
                </div>
                <hr>
                <div class="post-preview">
                    <a href="post.html">
                        <h2 class="post-title">
                            Ang karukhaan ay nag-aalis ng karangalan ng tao at ang karukhaang ito
                            ay maaaring magdiin pa rin sa kanya sa kasamaan.
                        </h2>
                    </a>
                    <p class="post-meta">Posted by
                        <a href="#">Admin</a>
                        on July 2018</p>
                </div>
                <hr>
                <div class="post-preview">
                    <a href="post.html">
                        <h2 class="post-title">
                            Ang Pondong Batangan ay ang pagsasabuhay ng pag-ibig ni Kristo
                        </h2>
                    </a>
                    <p class="post-meta">Posted by
                        <a href="#">Admin</a>
                        on July 2018</p>
                </div>
                <hr>
                <!-- Pager -->
                <div class="clearfix">
                    <a class="btn btn-primary float-right" href="#">Older Posts &rarr;</a>
                </div>
            </div>
        </div>
    </div>
</div>


<section class="content-section" style="background-color: #F3F8F2;">
    <div class="container text-center">
        <div class="row">
            <div class="col-lg-10 mx-auto">
                <q class="lead" style="font-size: 30px;"><i>Fullness of life for every Batangueno</i></q>
            </div>
        </div>
    </div>
</section>

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
                <a href="/teachings"><button type="button" class="btn btn-primary">Learn More</button></a>
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
                    <img src="img/logo.png" class="img-responsive" style="max-width: 155px;">
                </div>
            </div>
        </div>
</section>
<hr>
<footer>
    <div class="container">
        <p class="copyright text-muted">Copyright &copy; People of Pondong Batangan 2018</p>
    </div>
</footer>

@endsection
