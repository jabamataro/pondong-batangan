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
                <p>In the world of gifts, everything is of value. Small becomes relative,
                    depending on who weighs the grace. Even the “little gifts” must count.
                    The small must not be wasted. The little bits can be collected in order
                    to make a big heap.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
                <p>After the miraculous feeding of the loaves, the Lord Jesus ordered His
                    disciples, “Gather the pieces left over, so that nothing gets wasted. So
                    they picked them up and filled twelve baskets with scraps left over
                    from the meal of barely five loaves.” (John 6:12-13)</p>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
                <p>The pieces of left over bread still filled twelve baskets. At a later time
                    they could still feed another hungry crowd.</p>
            </div>
        </div>
    </div>
</article>

@endsection