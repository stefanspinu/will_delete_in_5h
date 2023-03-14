<?php

namespace App\Http\Controllers;

use App\Models\Article;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['articles'] = Article::orderBy('id', 'desc')->paginate(10);
        return view('articles.list', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('articles.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'text' => 'required',
        ]);
        Article::create($request->all());
        return redirect('articles')->with('success', 'Great! Article created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $where = array('id' => $id);
        $data['article'] = Article::where($where)->first();
        return view('articles.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'text' => 'required',
        ]);

        $update = ['title' => $request->title, 'description' => $request->description, 'text' => $request->text];
        Article::where('id', $id)->update($update);
        return redirect('articles')->with('success', 'Great! Article updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Article::where('id', $id)->delete();
        return redirect('articles')->with('success', 'Article deleted successfully.');
    }
}
