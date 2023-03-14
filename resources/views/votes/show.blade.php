@extends('votes/layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Vote Details</h2>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Choice:</strong>
                {{ ucfirst($vote->choice) }}
            </div>
        </div>
    </div>

@endsection