<?php

namespace App\Http\Controllers;

use App\Models\Map;
use App\Models\Routes;
use Illuminate\Http\Request;
use Taniko\Dijkstra\Graph;

class MapController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $stops= Map::get();
        return view('welcome')
        ->with('stops',$stops);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function routing()
    {
        $graph = Graph::create();
        $stops= Map::get();
        $rute = Routes::get();
        foreach ($rute as $r) {
            $graph->add($r->start, $r->stop, $r->distance,$r->price);
            }
        $route = $graph->search('DU', 'UNPAD'); // -> Masukkan titik awal , tujuan dari dropdown pake node di database. CASE SENSITIVE
        $cost  = $graph->cost($route);   
        $price = $graph->price($route);

        return view('routing')
        ->with('route', $route)
        ->with('price', $price)
        ->with('cost', $cost)
        ->with('stops',$stops);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Map  $map
     * @return \Illuminate\Http\Response
     */
    public function show(Map $map)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Map  $map
     * @return \Illuminate\Http\Response
     */
    public function edit(Map $map)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Map  $map
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Map $map)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Map  $map
     * @return \Illuminate\Http\Response
     */
    public function destroy(Map $map)
    {
        //
    }
}
