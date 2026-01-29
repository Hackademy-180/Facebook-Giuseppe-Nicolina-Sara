<?php

namespace App\Http\Controllers;

use App\Models\Face;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\Routing\Route;

class FaceController extends Controller
{



    /**
     * Display a listing of the resource.
     */
    public function home()
    {
        $faces = Face::all();
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
            "user_id"=>Auth::user()->id
        ]);
        return redirect(route('welcome'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Face $face)
    {
        return view('faces.detail', compact('face'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Face $face)
    {
        return view('faces.edit', compact('face'));
    }

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
}
