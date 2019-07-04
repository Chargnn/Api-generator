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
        $api_list = Api::paginate(20);

        return View('index')
               ->with('api_list', $api_list);
    }

    // Create api form
    public function create(){
        return View('add');
    }

    // Edit api form
    public function edit($api_id){
        $api = Api::find($api_id);
        $database = Database::where('api_id', '=', $api->id)->first();

        return View('edit')
            ->with('api', $api)
            ->with('database', $database);
    }

    // Store api in DB
    public function store(){
        $api = new Api();
        $api->name = request('api_name');

        $database = new Database();
        $database->api_id = $api->id;
        $database->host = request('database_host');
        $database->username = request('database_username');
        $database->password = request('database_password') ? request('database_password') : '';
        $database->database = request('database_database');

        $api->save();
        $database->save();

        return redirect('/');
    }

    // Update api
    public function update($api_id){
        $api = Api::find($api_id);
        $api->name = request('api_name');

        $database = Database::where('api_id', '=', $api->id)->first();
        $database->host = request('database_host');
        $database->username = request('database_username');
        $database->password = request('database_password') ? request('database_password') : '';
        $database->database = request('database_database');

        $api->save();
        $database->save();

        return redirect('/');
    }

    // Delete api
    public function delete($api_id){
        $api = Api::find($api_id);
        $api->delete();

        return redirect('/');
    }
}