@extends('layouts.app')
@section('content')
    <div class="container-fluid d-flex justify-content-center align-items-center content">
        <div class="card pers" style="width: 18rem;">
            <div class="card-body">
                <div class="p-1">
                    <h5 class="card-title"><strong>Titolo: </strong>{{ $post->title }}</h5>
                </div>
                <div class="p-1">
                    <span><strong>Contenuto: </strong></span>
                    <span class="card-text">"{{ $post->content }}"</span>
                </div>
                <div class="p-1">
                    <span><Strong>Data di publicazione: </Strong></span>
                    <span class="card-text">{{ $post->created_at->format('d/m/Y') }}</span>
                </div>
                <div class="p-1">
                    <span><strong>Visite: </strong></span>
                    <span class="card-text">{{ $post->visit }}</span>
                </div>
                <div class="p-1">
                    <span class="card-text"><strong>Like: </strong>{{ $post->positive_votes }}</strong></span>
                    <span></span>
                </div>
                <div class="p-1">
                    <span><strong>Dislike</strong></span>
                    <span class="card-text">{{ $post->negative_votes }}</span>
                </div>
                <div class="p-1">
                    <span><strong>slug</strong></span>
                    <span class="card-text">{{ $post->slug }}</span>
                </div>

                <a href="{{ route('admin.posts.index') }}" class="btn btn-primary">Lista Posts</a>
            </div>
        </div>
    </div>
@endsection
