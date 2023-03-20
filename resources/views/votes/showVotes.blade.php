@extends('votes/layout')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>Voting Results</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-4">
                <div >
                    <div class="card-body">
                        <h5 class="card-title">PHP</h5>
                        <h6 class="card-subtitle mb-2 text-muted">{{ $phpCount }} votes</h6>
                        <p class="card-text">
                            @foreach ($votesByUser as $vote)
                                @if ($vote->choice === 'php')
                                    {{ $vote->user->name }}<br>
                                @endif
                            @endforeach
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div> 
                    <div class="card-body">
                        <h5 class="card-title">Java</h5>
                        <h6 class="card-subtitle mb-2 text-muted">{{ $javaCount }} votes</h6>
                        <p class="card-text">
                            @foreach ($votesByUser as $vote)
                                @if ($vote->choice === 'java')
                                    {{ $vote->user->name }}<br>
                                @endif
                            @endforeach
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection