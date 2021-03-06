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

<article>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
                <h2 class="section-heading text-center">Vision - Mission Statement - Goals</h2>
                <p class="subheading text-center">Pondong Batangan Community Foundation Inc.</p>
                <p class="subheading text-center">PBCFI</p>
                <p class="subheading text-center">Archdiocese of Lipa</p>

                <hr>

                <span class="subheading text-center"><i>The ideals of PBCFI or Pondong Batangan is central to the
                        Vision of the Archdiocese of Lipa.</i></span>

                <p><i>PBCFI pursues this </i><u><b>Vision</u></b></p>
                <p class="text-center"><i>Fullness of life for every Batangueno.</i></p>

                <p><i>For the attainment of this “dream”,</i></p>
                <p><i>PBCFI pursues this </i><u><b>Mission</u></b></p>

                <p class="text-center">
                    <i>Impelled by the Holy Spirit, the total membership of PBCFI
                        commit themselves to participate in the realization of Christ’s love
                        by wayof integral evangelization which will specifically promote

                        the practice and culture of Christian Charity
                        and uplift the minds, hearts and lives of all Batanguenos.</i></p>
                </p>

                <p><i>To further clarify and specify its end,</i></p>
                <p><i>PBCFI seeks the accomplishment of these </i><u><b>Goals</u></b></p>

                <ul>
                    <li>To instruct and form people according to the teachings of Aral ng
                        Batangueno </li>
                    <li>To inspire and foster the practice of Pondong Batangan, especially
                        by way of small giving.</li>
                    <li>To initiate and/or support programs and projects for people and
                        community development, especially by way of grants</li>
                </ul>
                <hr>
            </div>
        </div>
    </div>
</article>

<article>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
                <h2 class="section-heading">An Integral Evangelization Program</h2>
                <p><b>Pondong Batangan</b> proclaims GOOD NEWS of Fullness of life or kaganapan ng Buhay. As
                    spelled out in the vision or Pananaw, Aral ng Batangueno takes this to mean freedom from all
                    enslaves the Batanguenos. Borrowing the definition of total human development from
                    Populorum Progressio, it refers to "the good of the whole person and of everyone."</p>

                <p><b>Pondong Batangan</b> fosters the formation of the heartts and minds of the Batanguenos in
                    the LOVE OF CHRIST. This is prompted by the practice of small giving or by living the
                    "Spirituality
                    of the Crumbs", an off-shoot of the reflection on the Parable of the Poor Man and the Rich Man
                    (Luke
                    16:19-31).</p>

                <p>Pondong Batangan is the operationalization of Christ's love. As the giving of 25 centavos
                    or loose change is done with frequency or regularity the practice of Christian Charity becomes
                    an
                    integral part of the one's lifestyle.</p>

                <h2 class="section-heading">A Community Foundation</h2>

                <p>Through the practice of small giving, Pondong Batangan is able to build up its funds
                    to support people and community development programs/projects. It is able to mobilize
                    local resources and achieve the capability to respond to the needs of the local community.
                </p>

                <p>Pondong Batangan is the whole Batangueno community sharing to uplift the lives of individuals
                    and
                    communities. It is also the practice of stewardship by Batanguenos to improve their lives and
                    create a
                    better future for everyone.
                </p>

                <p>The <b>TIBYO</b> or coin bank of Pondong Batangan is the instrument and sign of the Batanguenos
                    saving together
                    as members of one community to respond to the various development needs of this same community.
                </p>
                <hr>
                {{-- <a href="#">
                    <img class="img-fluid" src="img/post-sample-image.jpg" alt="">
                </a> --}}
            </div>
        </div>
    </div>
</article>

<article>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
                <h2 class="section-heading">Organizational Chart</h2>
                {{-- <img class="img-fluid" src="img/oc.png"> --}}
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
                <div class="card-group">
                    <div class="card">
                        <img class="card-img-top" src="img/default.jpg">
                        <div class="card-body">
                            <h5 class="card-title">Most Rev. Gilbert Garcera, D. D.</h5>
                            <p class="card-text">Chairman</p>
                        </div>
                    </div>
                    <div class="card">
                        <img class="card-img-top" src="img/default.jpg">
                        <div class="card-body">
                            <h5 class="card-title">Rev. Fr. Eriberto Cabrera (Vic. 6)</h5>
                            <p class="card-text">Vice Chairman</p>
                        </div>
                    </div>
                    <div class="card">
                        <img class="card-img-top" src="img/default.jpg">
                        <div class="card-body">
                            <h5 class="card-title">Bernardia Maralit (Vic. 5)</h5>
                            <p class="card-text">Treasurer</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
                <div class="card-group">
                    <div class="card">
                        <img class="card-img-top" src="img/default.jpg">
                        <div class="card-body">
                            <h5 class="card-title">Rev Fr. Manuel Guazon</h5>
                            <p class="card-text">Executive Director</p>
                        </div>
                    </div>
                    <div class="card">
                        <img class="card-img-top" src="img/default.jpg">
                        <div class="card-body">
                            <h5 class="card-title">Ma. Lourdes Dumaguin</h5>
                            <p class="card-text">Accountant Bookkeeper</p>
                        </div>
                    </div>
                    <div class="card">
                        <img class="card-img-top" src="img/default.jpg">
                        <div class="card-body">
                            <h5 class="card-title">Alberto Dumaguin</h5>
                            <p class="card-text">Company Driver</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <hr>
    </div>
</article>

@endsection
