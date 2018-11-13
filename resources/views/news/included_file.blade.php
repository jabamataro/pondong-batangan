@extends('pages.index')

@section('content')
<div class="content-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-10 mx-auto">
                    
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 col-md-10 mx-auto">
                    @if(count($newsOnly) > 0)
                        @foreach ($newsOnly as $n)
                            <div class="post-preview">
                                <a href="/news/{{$n->id}}">
                                    <h2 class="post-title">
                                        {{$n->title}}
                                    </h2>
                                </a>
                                <p class="post-meta">Written on {{date('F d, Y', strtotime($n->created_at))}}</p>
                            </div>
                            <hr>
                        @endforeach
                        {{$newsOnly->links()}}
                    @else
                        <h2 class="post-title">No News Found.</h2>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection
