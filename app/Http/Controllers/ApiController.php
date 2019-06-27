<?php

namespace App\Http\Controllers;

use App\Api;
use App\Database;
use App\Database_Api;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

class ApiController extends Controller
{
    // List api
    public function index(){
        $api_list = DB::table('api')->paginate(4);

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

        $database = new Database();
        $database->api_id = $api->id;
        $database->host = $request->database_host;
        $database->username = $request->database_username;
        $database->password = $request->database_password ? $request->database_password : '';
        $database->database = $request->database_database;
        $database->charset = $request->database_charset;
        $database->save();

        return redirect('/');
    }

    // Edit api form
    public function edit(){
        $id = Route::current()->parameter('id');
        $api = Api::find($id);

        $database = Database::where('api_id', '=', $api->id)->first();

        return View('edit')
            ->with('api', $api)
            ->with('database', $database);
    }

    // Update api
    public function update(Request $request){
        $api = Api::find($request->api_id);
        $api->name = $request->api_name;

        $database = Database::where('api_id', '=', $api->id)->first();
        $database->host = $request->database_host;
        $database->username = $request->database_username;
        $database->password = $request->database_password ? $request->database_password : '';
        $database->database = $request->database_database;
        $database->charset = $request->database_charset;

        $api->save();
        $database->save();

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