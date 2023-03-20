<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <title>Laravel File Upload</title>
    <style>
        .container {
            max-width: 500px;
        }
        dl, ol, ul {
            margin: 0;
            padding: 0;
            list-style: none;
        }
    </style>
</head>
<body>

<div class="container">
    <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
      <a href="/" class="d-flex align-items-center col-md-3 mb-2 mb-md-0 text-dark text-decoration-none">
        <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"></use></svg>
      </a>

      <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
        <li><a href="{{ route('allArticle') }}" class="nav-link px-2 link-dark">Articles</a></li>
        <li><a href="{{ route('articles.index') }}" class="nav-link px-2 link-dark">Admin</a></li>
        <li><a href="{{ route('votes.index') }}" class="nav-link px-2 link-dark">Vote System</a></li>
        <li><a href="{{ route('listFiles') }}" class="nav-link px-2 link-secondary">File Upload</a></li>
      </ul>
    </header>

    <div class="container" style="display: flex; flex-direction: column; justifiy-content: center; align-items: center;">
        <h1>All Files</h1>

        @if (count($files) > 0)
        <ul>
            @foreach ($files as $file)
            <li>
                <a href="{{ $file->file_path }}" download>{{ $file->name }}</a>
            </li>
            @endforeach
        </ul>
        @else
        <p>No files found.</p>
        @endif

    </div>

</body>
</html>