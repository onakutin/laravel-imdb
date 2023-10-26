<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function index()
    {
        $latestReleases = Movie::query()
            ->orderBy('year', 'desc')
            ->limit(10)
            ->with('movie_type')
            ->where('movie_status_id', 14)
            ->get();

        $topTitles = Movie::query()
            ->orderBy('rating', 'desc')
            ->limit(10)
            ->get();

        return view('index.home', compact('latestReleases', 'topTitles'));
    }
}
