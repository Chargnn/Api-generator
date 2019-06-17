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
        $routes = Route_Api::join('routes', 'routes.id', '=', 'route_api.route_id')
            ->where('route_api.api_id', '=', $api_id)->get();

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
        $route->method = $request->route_method;
        $route->route = $request->route_route;
        $route->query = $request->route_query;
        $route->active = true;
        $route->save();

        $route_api = new Route_Api();
        $route_api->api_id = $request->api_id;
        $route_api->route_id = $route->id;
        $route_api->save();

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
        $id = $request->route_id;
        $method = $request->route_method;
        $route = $request->route_route;
        $query = $request->route_query;
        $active = $request->route_active;
        $routeModel = \App\Route::find($id);
        $route_api = Route_Api::where('route_id', '=', $id)->first();

        $routeModel->method = $method;
        $routeModel->route = $route;
        $routeModel->query = $query;
        $routeModel->active = $active;
        $routeModel->save();

        return redirect('/routes/' . $route_api->api_id);
    }

    // Delete api
    public function delete(){
        $id = Route::current()->parameter('id');
        $route = \App\Route::find($id);
        $route->delete();

        $route_api = Route_Api::where('route_id', '=', $id)->first();
        $api_id = $route_api->api_id;
        $route_api->delete();

        return redirect('/routes/' . $api_id);
    }
}