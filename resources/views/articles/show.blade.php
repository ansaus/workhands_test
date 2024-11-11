@extends('layouts.app')

@section('content')
    <div id="app">
        <div class="container my-5">
            <!-- Заголовок статьи -->
            <div class="mb-4">
                <h1 class="fw-bold">{{ $article->title }}</h1>
                <div class="d-flex align-items-center text-secondary mb-3">
                    <!-- Счетчик лайков -->
                    <like-button
                            article-id="{{ $article->id }}"
                            initial-likes="{{ $articleDTO->getLikesCount() }}">
                    </like-button>
                    <!-- Счетчик просмотров -->
                    <view-counter
                            article-id="{{ $article->id }}"
                            initial-views="{{ $articleDTO->getViewsCount() }}">
                    </view-counter>
                </div>
            </div>

            <!-- Теги статьи -->
            <div class="mb-4">
                @foreach($article->tags as $tag)
                    <a href="{{ route('articles.list', ['tag' => $tag->id]) }}" class="badge badge-outline-secondary text-decoration-none me-2">{{ $tag->name }}</a>
                @endforeach
            </div>

            <!-- Текст статьи -->
            <div class="mb-5">
                {!! $article->body !!}
            </div>

            <!-- Форма для комментариев -->
            <comment article-id="{{ $article->id }}"></comment>
        </div>
    </div>
@endsection

@push('scripts')
    <script src="{{ mix('js/app.js') }}"></script>
@endpush
