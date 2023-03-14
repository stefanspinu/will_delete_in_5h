@extends('votes/layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Vote for your favorite language</h2>
            </div>
        </div>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('votes.store') }}" method="POST">
        @csrf

        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="form-group">
                    <strong>Choice:</strong>
                    @if ($hasVotedJava || $hasVotedPhp)
                        <div class="alert alert-danger" role="alert">
                            You have already voted.
                        </div>
                    @else
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="choice" id="choice-php" value="php" checked>
                            <label class="form-check-label" for="choice-php">
                                PHP
                            </label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="choice" id="choice-java" value="java">
                            <label class="form-check-label" for="choice-java">
                                Java
                            </label>
                        </div>
                    @endif
                    
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>

@endsection