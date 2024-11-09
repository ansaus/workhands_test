@extends('layouts.app')

@section('content')
    <div class="container my-5">
        <!-- Заголовок статьи -->
        <div class="mb-4">
            <h1 class="fw-bold">{{ $article->title }}</h1>
            <div class="d-flex align-items-center text-secondary mb-3">
                <!-- Счетчик просмотров -->
                <div class="d-flex align-items-center me-4">
                <span class="me-1">
                    <i class="bi bi-eye-fill fs-3"></i>
                </span>
                    <span class="small">{{ $article->views_count }}</span>
                </div>
                <!-- Счетчик лайков -->
                <div id="app">
                    <like-button
                        article-id="{{ $article->id }}"
                        initial-likes="{{ $article->likes_count }}">
                    </like-button>
                </div>
            </div>
        </div>

        <!-- Теги статьи -->
{{--        <div class="mb-4">--}}
{{--            @foreach($article->tags as $tag)--}}
{{--                <span class="badge bg-secondary me-2">{{ $tag->name }}</span>--}}
{{--            @endforeach--}}
{{--        </div>--}}

        <!-- Текст статьи -->
        <div class="mb-5">
            <p>{{ $article->body }}</p>
        </div>

        <!-- Форма для комментариев -->
{{--        <div class="comment-form mt-5">--}}
{{--            <h4 class="mb-4">Оставить комментарий</h4>--}}
{{--            <form action="{{ route('articles.comment', $article->id) }}" method="POST">--}}
{{--                @csrf--}}
{{--                <div class="mb-3">--}}
{{--                    <label for="subject" class="form-label">Тема сообщения</label>--}}
{{--                    <input type="text" name="subject" id="subject" class="form-control" required>--}}
{{--                </div>--}}
{{--                <div class="mb-3">--}}
{{--                    <label for="body" class="form-label">Сообщение</label>--}}
{{--                    <textarea name="body" id="body" class="form-control" rows="4" required></textarea>--}}
{{--                </div>--}}
{{--                <button type="submit" class="btn btn-primary">Отправить</button>--}}
{{--            </form>--}}
{{--        </div>--}}
    </div>
@endsection

@push('scripts')
    <script src="{{ mix('js/app.js') }}"></script>
@endpush
