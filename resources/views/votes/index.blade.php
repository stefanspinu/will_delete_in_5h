@extends('votes/layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Vote Results</h2>
            </div>
        </div>
    </div>

    <!-- <table class="table table-bordered">
        <tr>
            <th>ID</th>
            <th>Choice</th>
            <th>Votes</th>
        </tr>
        @foreach ($votes as $vote)
        <tr>
            <td>{{ $vote->id }}</td>
            <td>{{ ucfirst($vote->choice) }}</td>
            <td>{{ $vote->where('choice', $vote->choice)->count() }}</td>
            
        </tr>
        @endforeach
    </table> -->

    <!-- <br>
    <br>
    <br> -->


    <table class="table table-bordered">
        <tr>
            <th>Java Votes</th>
            <th>Php Votes</th>
        </tr>
        <tr>
            <td>{{ $javaCount }}</td>
            <td>{{ $phpCount }}</td>
            
        </tr>
    </table>
    <h5>Haven't voted yet?<a href="{{ route('votes.create') }}">Go and Vote</a></h5>


@endsection