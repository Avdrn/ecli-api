<?php

namespace App\Http\Controllers\Api;


use App\Http\Controllers\Controller;
use App\Models\Court;
use Illuminate\Http\Request;
// use Cache;
use App\Http\Resources\CourtResource;

class CourtController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function index()
    {

        return CourtResource::collection(Court::withCount('documents')->paginate(10));

    }
}