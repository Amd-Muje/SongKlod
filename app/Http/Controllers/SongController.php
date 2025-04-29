<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SongController extends Controller
{
    //
    public function index()
    {
        return view('songs.index');
    }

    public function create()
    {
        return view('songs.create');
    }

    public function edit(string $id)
    {
        return view('songs.edit');
    }

    public function show(string $id)
    {
        return view('songs.show');
    }
}
