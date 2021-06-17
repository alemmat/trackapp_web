<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Controllers\API\BaseController as BaseController;
use Illuminate\Support\Facades\Auth;
use App\Models\Track;
use Inertia\Inertia;

class TrackController extends BaseController{


    public function create(){

      $track = new Track();
      $track->save();

      return response()->json(['id' => 3]);

    }

    public function show($id){

      return Inertia::render('showtrack',[
          'tracks' => Track::where('id',$id)->with('positions')->get()
      ]);
    }
}
