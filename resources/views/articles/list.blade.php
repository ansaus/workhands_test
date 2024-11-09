@extends('layouts.app') <!-- Подключаем основной шаблон -->

@section('content')
    <div class="container">
        <h1>Каталог статей</h1>

        <!-- Листинг статей -->
        <div class="row">
            @foreach($articles as $article)
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="{{ $article->thumbnail }}" class="card-img-top" alt="Миниатюра">
                        <div class="card-body">
                            <h5 class="card-title">{{ $article->title }}</h5>
                            <p class="card-text">{{ Str::limit($article->body, 100) }}</p>
                            <a href="{{ route('articles.show', $article->id) }}" class="btn btn-primary">Читать далее</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <!-- Пейджинация -->
        <div class="d-flex justify-content-center">
            {{ $articles->links() }}
        </div>
    </div>
@endsection
