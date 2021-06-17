<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use Illuminate\Support\Facades\Auth;
use App\Models\Track;

class LandingController extends Controller
{
  public function index(){

    $user = Auth::user();

    return Inertia::render('ListTracks',[
        'tracks' => $user->tracks()->with('positions')->get()
    ]);
  }
}
