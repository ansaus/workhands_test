@extends('layouts.app')

@section('content')
    <div class="container my-5">
        <!-- Верхний блок с заголовком и описанием -->
        <div class="text-center mb-5">
            <h1 class="display-4">Звуки Истории</h1>
            <p class="lead">Путешествие во времени через мелодии и инструменты</p>
        </div>

        <!-- Листинг статей -->
        <div class="row">
            @foreach($articles as $article)
                <div class="col-md-4 mb-4">
                    <div class="card shadow-sm h-100">
                        <img src="{{ asset('images/thumbnails/1.png') }}" class="card-img-top" alt="Миниатюра статьи">
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title">{{ $article->title }}</h5>
                            <p class="card-text">{!! Str::limit($article->body, $previewSymLimit)  !!}</p>
                            <div class="mt-auto">
                                <a href="{{ route('articles.show', $article->id) }}" class="btn btn-outline-secondary">Читать далее</a>
                            </div>
                        </div>
                        <!-- Футер карточки -->
                        <div class="card-footer bg-white d-flex justify-content-between align-items-center">
                            <!-- Счетчик просмотров -->
                            <div class="d-flex align-items-center text-secondary">
                                <span class="me-1">
                                    <i class="bi bi-eye-fill"></i>
                                </span>
                                <span class="small">{{ $articleDTOs[$article->id]->getViewsCount() }}</span>
                            </div>
                            <!-- Счетчик лайков -->
                            <div class="d-flex align-items-center text-secondary">
                                <span class="me-1">
                                    <i class="bi bi-heart"></i>
                                </span>
                                <span class="small">{{ $articleDTOs[$article->id]->getLikesCount() }}</span>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
