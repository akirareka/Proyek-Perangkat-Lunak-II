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
    public function shuttle()
    {
        $stops= Map::where('kendaraan','Shuttle')->get();
        return view('shuttle.index')
        ->with('stops',$stops);
    }

    public function bis()
    {
        $stops= Map::where('kendaraan','Bus')->get();
        return view('bus.index')
        ->with('stops',$stops);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function routing(Request $request)
    {
        $graph = Graph::create();
        $stops= Map::orderBy('name')->get();
        $rute = Routes::get();
        foreach ($rute as $r) {
            $graph->add($r->start, $r->stop, $r->distance,$r->price);
            }
        if ($request->awal == $request->akhir) {
            return view('welcome')
            ->with('stops',$stops)
            ->with('successMsg','Titik awal tidak bisa sama dengan tujuan');
        }
        $route = $graph->search($request->awal, $request->akhir); // -> Masukkan titik awal , tujuan dari dropdown pake node di database. CASE SENSITIVE
        $cost  = $graph->cost($route);   
        $price = $graph->price($route);

        return view('routing')
        ->with('route', $route)
        ->with('price', $price)
        ->with('cost', $cost)
        ->with('stops',$stops);
    }

 
}
