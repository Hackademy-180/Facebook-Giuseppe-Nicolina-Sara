<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Profile;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // return view("profiles.index");
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Profile $profile)
    {
        // $profiles= Profile::all();
        return view("profiles.index");
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Profile $profile)
    {
        $users= User::all();
        return view('profiles.edit', compact('users', 'profile'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Profile $profile)
    {
        $profile->update([
            'name'=>$request->name,
            'surname'=>$request->surname,
            'birthday'=>$request->birthday,
            'bio'=>$request->bio,
            'img'=>$request->file('img') ? $request->file('img')->store('image', 'public'): null,

        ]);
        return redirect(route('profile_index', compact('profile')));

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Profile $profile)
    {
        //
    }
}
