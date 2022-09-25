<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $graph = Taniko\Dijkstra\Graph::create();
    $graph
    //->add('node start','node tujuan',jarak,harga)
    ->add('DU', 'a', 1,3000)
    ->add('DU', 'Arcamanik', 2,6000)
    ->add('Arcamanik', 'Ujung Berung', 2,3000)
    ->add('Ujung Berung', 'Cibiru', 1,2000)
    ->add('Cibiru', 'Unpad', 1,2000);
    $route = $graph->search('DU', 'Unpad'); // ['DU', 'b', 'c', 'd', 'Unpad']
    $cost  = $graph->cost($route);     // 6.0
    $price = $graph->price($route);
    return view('welcome')
    ->with('route', $route)
    ->with('price', $price)
    ->with('cost', $cost);
});
