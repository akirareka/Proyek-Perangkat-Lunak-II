<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Map;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $stops= Map::get();
        return view('home')
        ->with('stops',$stops);
    }
}
