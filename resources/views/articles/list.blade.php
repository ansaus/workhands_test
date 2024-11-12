@extends('layouts.app')

@section('content')
    <div class="container my-5">
        <div class="row">
            <!-- Sidebar для тегов -->
            <div class="col-md-3">
                <div class="mb-4">
                    <h5>Теги</h5>
                    <div class="tags-list">
                        @foreach ($tags as $tag)
                            <a href="{{ route('articles.list', ['tag' => $tag->id]) }}" class="{{ isset($tagId) && $tagId == $tag->id ? 'badge bg-secondary text-white' : 'badge badge-outline-secondary' }} text-decoration-none mb-2">{{ $tag->name }}</a>
                        @endforeach
                    </div>
                </div>
            </div>

            <!-- Список статей -->
            <div class="col-md-9">
                @foreach ($articles as $article)
                    <div class="card mb-4">
                        <!-- Изображение -->
                        <img src="{{ asset('images/full/1.png') }}" class="card-img-top" alt="{{ $article->title }}">
                        <!-- Контент статьи -->
                        <div class="card-body">
                            <h5 class="card-title">{{ $article->title }}</h5>
                            <p class="card-text">{!! Str::limit($article->body, $previewSymLimit)  !!}</p>
                            <div class="d-flex align-items-center text-secondary">
                                <!-- Счетчик просмотров -->
                                <div class="d-flex align-items-center me-4">
                                    <span class="me-1">
                                        <i class="bi bi-eye-fill fs-4"></i>
                                    </span>
                                    <span class="small">{{ $articleDTOs[$article->id]->getViewsCount() }}</span>
                                </div>
                                <!-- Счетчик лайков -->
                                <div class="d-flex align-items-center text-secondary">
                                    <span class="me-1">
                                        <i class="bi bi-heart fs-6"></i>
                                    </span>
                                    <span class="small">{{ $articleDTOs[$article->id]->getLikesCount() }}</span>
                                </div>
                            </div>
                            <a href="{{ route('articles.show', $article->id) }}" class="btn btn-outline-secondary mt-3">Читать далее</a>
                        </div>
                    </div>
                @endforeach

                <!-- Пагинация -->
                <div class="d-flex justify-content-center mt-4">
                    {{ $articles->links() }}
                </div>
            </div>
        </div>
    </div>
@endsection
