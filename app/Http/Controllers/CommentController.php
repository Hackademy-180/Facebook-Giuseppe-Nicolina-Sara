<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Face;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $comments = Comment::all();
        return view("comments.detail", compact('comments'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, Face $face)
    {
        $face->comments()->create([
            'content' => $request->content,
            'user_id' => Auth::user()->id,
        ]);
        return back();
    }

    /**
     * Display the specified resource.
     */
    public function show(Comment $comment)
    {
        return view("comments.detail");
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Comment $comment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Comment $comment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Comment $comment)
    {
        $comment->delete();
        return redirect(route('welcome'));
    }
}
