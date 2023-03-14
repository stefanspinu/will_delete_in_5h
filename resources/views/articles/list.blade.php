@extends('articles.layout')
@section('content')
<a href="{{ route('articles.create') }}" class="btn btn-success mb-2">Add</a>

<table class="table table-bordered">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Text</th>
                    <th>Created at</th>
                    <th width="280px">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($articles as $article)
                    <tr>
                        <td>{{ $article->id }}</td>
                        <td>{{ $article->title }}</td>
                        <td>{{ $article->description }}</td>
                        <td>{{ $article->text }}</td>
                        <td>{{ date('Y-m-d', strtotime($article->created_at)) }}</td>
                        <td>
                            <form action="{{ route('articles.destroy', $article->id) }}" method="Post">
                                <a class="btn btn-primary" href="{{ route('articles.edit', $article->id) }}">Edit</a>
                                {{ @csrf_field() }}
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
            </tbody>
        </table>
        {{ $articles->links() }}
@endsection