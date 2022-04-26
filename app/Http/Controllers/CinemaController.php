<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Film;

class CinemaController extends Controller
{
    /**
     * show dashboard
     * @return void
     */
    public function dashboard()
    {
        $films = Film::all();
        return view('dashboard', ['films' => $films]);
    }

    /**
     * show film page
     * @return void
     */
    public function film(Request $req)
    {
        $film = Film::findOrFail($req->id);
        return view('film', ['film'=>$film]);
    }
}
