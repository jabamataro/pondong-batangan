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
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
                <p>Through Pondong Batangan, the Batangueño becomes the little
                        expression of God’s kindness to people in need. And the marvelous
                        part of it all is that he does so in very unnoticeable ways and by way
                        of nearly negligible amounts. He is not threatened by the little sum of
                        money – fifty centavos or a peso. But more than this, the constant love
                        of God expressed in his frequent little acts of kindness truly
                        encourages him to repeat, and repeat, compassion for others. The
                        frequency of his little acts of generosity develops into a pattern of
                        living in love.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
                <h2 class="section-heading">It became a habit or a way of life.</h2>
                <p>In Pondong Batangan, the Batangueño becomes truly enlightened and
                        encouraged. He learns to live the <b>sacrament of little acts of kindness
                        for others.</b></p>
            </div>
        </div>
    </div>
</article>

@endsection