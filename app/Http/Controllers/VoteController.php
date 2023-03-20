<?php

namespace App\Http\Controllers;

use App\Models\Vote;

use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class VoteController extends Controller
{

    public function showVotes()
    {
        $phpCount = Vote::where('choice', 'php')->distinct('user_id')->count('user_id');
        $javaCount = Vote::where('choice', 'java')->distinct('user_id')->count('user_id');
        $votes = Vote::all();

        $votesByUser = Vote::with('user')->get();

        return view('votes.showVotes', compact('phpCount', 'javaCount', 'votes', 'votesByUser'));
    }

    public function index()
    {
        $phpCount = Vote::where('choice', 'php')->distinct('user_id')->count('user_id');
        $javaCount = Vote::where('choice', 'java')->distinct('user_id')->count('user_id');
        $votes = Vote::all();

        return view('votes.index', compact('phpCount', 'javaCount', 'votes'));
    }

    public function create()
    {
        $user = request()->user(); // get the current authenticated user

        // check if the user has already voted
        $hasVotedPhp = $user->votes()->where('choice', 'php')->exists();
        $hasVotedJava = $user->votes()->where('choice', 'java')->exists();

        return view('votes.create', compact('hasVotedPhp', 'hasVotedJava'));
    }

    public function store(Request $request)
    {
        $user = request()->user(); // get the current authenticated user

        // check if the user has already voted
        if ($user->votes()->where('choice', $request->choice)->exists()) {
            return redirect()->back()->withErrors(['You have already voted for this choice.']);
        }

        $request->validate([
            'choice' => 'required',
        ]);

        $vote = new Vote;
        $vote->choice = $request->choice;
        $vote->user_id = $user->id; // associate the vote with the current user
        $vote->save();

        return redirect()->route('votes.index')
            ->with('success','Your vote has been recorded.');
    }

    public function show(Vote $vote)
    {
        return view('votes.show', compact('vote'));
    }
}
