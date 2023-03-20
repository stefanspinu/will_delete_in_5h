@extends('articles.layout2')
@section('content')
<div class="container">
    <main class="container">
        <div class="row mb-2">
            @foreach ($articles as $a)
                <div class="col-md-6">
                    <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                        <div class="col p-4 d-flex flex-column position-static">
                            <h3 class="mb-0">{{ $a -> title }}</h3>
                            <div class="mb-1 text-muted">{{ $a -> created_at->format('d M') }}</div>
                            <p class="card-text mb-auto">{{ $a -> description }}</p>
                            <a href="{{ route('singleArticle', $a->id) }}" class="stretched-link">Continue reading</a>
                            </div>
                            <div class="col-auto d-none d-lg-block">
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </main>
</div>
@endsection