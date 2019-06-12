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

        return $this->index();
    }

    // Edit api form
    public function edit(){}

    // Update api
    public function update(){}

    // Delete api
    public function delete(){
        $id = Route::current()->parameter('id');
        $api = Api::find($id);
        $api->delete();

        return $this->index();
    }
}