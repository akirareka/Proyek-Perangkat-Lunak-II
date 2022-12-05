<?php

namespace App\Http\Controllers;

use App\Models\Map;


class MapController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function shuttle()
    {
        $stops= Map::where('kendaraan','Shuttle')->orderBy('name')->get();
        return view('shuttle.index')
        ->with('stops',$stops);
    }

    public function bis()
    {
        $stops= Map::where('kendaraan','Bus')->orderBy('name')->get();
        return view('bus.index')
        ->with('stops',$stops);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

 
}
