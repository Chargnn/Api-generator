<?php

namespace App\Http\Controllers;

use App\Api;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\Route;

class ApiController extends Controller
{
    // List api
    public function index(){
        $api_list = Api::all();

        return View('index')
               ->with('api_list', $api_list);
    }

    // Create api form
    public function create(){
        return View('add');
    }

    // Store api in DB
    public function store(Request $request){
        $api = new Api();
        $api->name = $request->api_name;
        $api->save();

        return redirect('/');
    }

    // Edit api form
    public function edit(){
        $id = Route::current()->parameter('id');
        $api = Api::find($id);

        return View('edit')
            ->with('api', $api);
    }

    // Update api
    public function update(Request $request){
        $id = $request->api_id;
        $name = $request->api_name;
        $api = Api::find($id);

        $api->name = $name;
        $api->save();

        return redirect('/');
    }

    // Delete api
    public function delete(){
        $id = Route::current()->parameter('id');
        $api = Api::find($id);
        $api->delete();

        return redirect('/');
    }
}