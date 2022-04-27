<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Film;
use App\Models\Genre;

class CinemaController extends Controller {
    /**
     * show dashboard
     */
    public function dashboard() {
        $films = Film::all();
        return view('dashboard', ['films' => $films]);
    }

    /**
     * show film page
     */
    public function showFilm(Request $req) {
        $film = Film::findOrFail($req->id);
        return view('film', ['film'=>$film]);
    }

    /**
     * show film by genre
     */
    public function showFilmsByGenre(Request $req) {
        $films = Film::where('id_genre', $req->id)->get();
        return view('filmByGenre', ['films'=>$films]);
    }
}
