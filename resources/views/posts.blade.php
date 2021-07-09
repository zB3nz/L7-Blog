@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            @foreach($posts as $post)
            <div class="card mb-4">

                @if ( $post->image )
                    <a href="{{ route('post', $post) }}">
                        <img src="{{ $post->get_image }}" class="card-img-top">
                    </a>
                @elseif ( $post->iframe )
                    <div class="embed-responsive embed-responsive-16by9">
                        {!! $post->iframe !!}
                    </div>
                @endif

                <div class="card-body">
                    <h4 class="card-title text-dark font-weight-bold mb-0">{{ $post->title }}</h4>   
                    <p class="text-muted mb-0">
                        <em> {{ $post->user->name }} </em>
                        &ndash; {{ $post->created_at->format('d M Y') }}
                    </p> 
                    <p class="card-text">
                        {{ $post->get_excerpt }}
                        <a href="{{ route('post', $post) }}" > Leer más </a>
                    </p> 
                </div>

            </div>
            @endforeach

            {{ $posts->links() }}

        </div>
    </div>
</div>
@endsection
