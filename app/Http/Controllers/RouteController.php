<?php

namespace App\Http\Controllers;

use App\Api;
use App\Route_Api;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

class RouteController extends Controller
{
    // List api
    public function index(){
        $api_id = Route::current()->parameter('api_id');
        $routes = \App\Route::where('api_id', '=', $api_id)->paginate(4);

        return View('routes.index')
            ->with('api_id', $api_id)
            ->with('routes', $routes);
    }

    // Create route form
    public function create(){
        $api_id = Route::current()->parameter('api_id');

        return View('routes.add')
            ->with('api_id', $api_id);
    }

    // Store route in DB
    public function store(Request $request){
        $route = new \App\Route();
        $route->api_id =  $request->api_id;
        $route->method = $request->route_method;
        $route->route = $request->route_route;
        $route->query = $request->route_query;
        $route->active = true;
        $route->save();

        return redirect('/routes/' . $request->api_id);
    }

    // Edit api form
    public function edit(){
        $id = Route::current()->parameter('route_id');
        $route = \App\Route::find($id);

        return View('routes.edit')
            ->with('route', $route);
    }

    // Update api
    public function update(Request $request){
        $route = \App\Route::find($request->route_id);

        $route->method = $request->route_method;
        $route->route = $request->route_route;
        $route->query = $request->route_query;
        $route->active = $request->route_active;
        $route->save();

        return redirect('/routes/' . $route->api_id);
    }

    // Delete api
    public function delete(){
        $id = Route::current()->parameter('route_id');
        $route = \App\Route::find($id);
        $api_id = $route->api_id;
        $route->delete();

        return redirect('/routes/' . $api_id);
    }
}