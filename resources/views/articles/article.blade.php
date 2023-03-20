@extends('articles.layout2')
@section('content')
<div class="container">
<main class="container">
<div class="row g-5">
    <div class="col-md-8">
      <article class="blog-post">
        <h2 class="blog-post-title mb-1">{{ $article -> title }}</h2>
        <p class="blog-post-meta">{{ $article -> created_at->format('d M Y') }}</p>

        <h5>Description</h5>
        <p>{{ $article -> description }}</p>
        <h5>About</h5>
        <p>{{ $article -> text }}</p>

    </div>

    <div class="col-md-4">
      <div class="position-sticky" style="top: 2rem;">
        <div class="p-4">
          <h4 class="fst-italic">Latest articles</h4>
          <ol class="list-unstyled mb-0">
            @foreach ($articles as $a)
                <li><a href="{{ route('singleArticle', $a->id) }}">{{ $a -> title }}</a></li>
            @endforeach
          </ol>
        </div>
      </div>
    </div>
</div>
</main>
</div>
@endsection