<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\API\BaseController as BaseController;
use App\Models\Position;
use Validator;
use Illuminate\Support\Facades\Log;

use Illuminate\Support\Facades\Auth;

class PositionController extends BaseController
{

    public function store(Request $request){

      Log::debug($request);
      return Position::create( $request->all() );
    }
}
