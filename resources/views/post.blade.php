@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card mb-4">

                <div class="card-body">

                    @if ( $post->image )
                        <img src="{{ $post->get_image }}" class="card-img-top">
                    @elseif ( $post->iframe )
                        <div class="embed-responsive embed-responsive-16by9">
                            {!! $post->iframe !!}
                        </div>
                    @endif

                    <p></p>
                    <h4 class="card-title text-dark font-weight-bold mb-0">{{ $post->title }}</h4>   
                    <p class="text-muted mb-0">
                        <em> {{ $post->user->name }} </em>
                        &ndash; {{ $post->created_at->format('d M Y') }}
                    </p> 
                    <hr>
                    <p class="card-text">
                        {{ $post->body }}
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
