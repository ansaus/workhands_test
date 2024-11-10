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
            {{--        <div class="mb-4">--}}
            {{--            @foreach($article->tags as $tag)--}}
            {{--                <span class="badge bg-secondary me-2">{{ $tag->name }}</span>--}}
            {{--            @endforeach--}}
            {{--        </div>--}}

            <!-- Текст статьи -->
            <div class="mb-5">
                {!! $article->body !!}
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
    </div>
@endsection

@push('scripts')
    <script src="{{ mix('js/app.js') }}"></script>
@endpush
