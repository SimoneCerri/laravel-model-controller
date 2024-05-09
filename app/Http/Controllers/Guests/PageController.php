<?php

namespace App\Http\Controllers\Guests;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Movie;

class PageController extends Controller
{
    //
    public function home()
    {
        return view('guests.home');
    }

    public function movies ()
    {
        $movies = Movie::all();
        return view('guests.movies', compact('movies'));
    }

    public function tv_series ()
    {
        $tv_series = TV::all();
        return view('guests.tv_series',compact('tv_series'));
    }
}
