<?php

namespace App\Http\Controllers;

use App\Models\Face;
use Illuminate\Http\Request;
use Illuminate\Routing\Controllers\HasMiddleware;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\Routing\Route;

class FaceController extends Controller implements HasMiddleware
{

    public static function middleware()
    {
        return [
            'auth'
        ];
    }

    /**
     * Display a listing of the resource.
     */
    public function home()
    {
        $faces = Face::all();
        $faces = Face::latest()->get(); //per i mettere i post in ordine descrescente
        return view('welcome', compact("faces"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        return view("welcome");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Face::create([
            "title" => $request->title,
            "content" => $request->content,
            "mood" => $request->mood,
            "img" => $request->file("img") ? $request->file("img")->store("image", "public") : "/media/default.png",
            "user_id" => Auth::user()->id
        ]);
        return redirect(route('welcome'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Face $face)
    {
        return view('comments.create', compact('face'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Face $face) {}

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Face $face)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Face $face)
    {
        //
    }
    public function favoriteFace(Face $face)
    {
        $face->favoriteUsers()->attach(Auth::user()->id);
        return redirect()->back();
    }
}
