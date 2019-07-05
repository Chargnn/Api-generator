<?php

namespace App\Http\Controllers;

use App\Api;
use App\Database;

class ApiController extends Controller
{
    private $api_pagination = 20;

    // List api
    public function index(){
        $api_list = Api::paginate($this->api_pagination);

        return View('index')
               ->with('api_list', $api_list);
    }

    // Create api form
    public function create(){
        return View('add');
    }

    // Edit api form
    public function edit(Api $api_id){
        $api = $api_id;
        $database = $api->database()->first();

        return View('edit')
            ->with('api', $api)
            ->with('database', $database);
    }

    // Store api in DB
    public function store(){
        request()->validate([
            'api_name' => 'required|min:3|max:255',
            'database_host' => 'required|max:255',
            'database_username' => 'required|max:255',
            'database_database' => 'required|max:255'
        ]);

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
    public function update(Api $api_id){
        request()->validate([
            'api_name' => 'required|min:3|max:255',
            'database_host' => 'required|max:255',
            'database_username' => 'required|max:255',
            'database_database' => 'required|max:255'
        ]);

        $api = $api_id;
        $api->name = request('api_name');

        $database = $api->database()->first();
        $database->host = request('database_host');
        $database->username = request('database_username');
        $database->password = request('database_password') ? request('database_password') : '';
        $database->database = request('database_database');

        $api->save();
        $database->save();

        return redirect('/');
    }

    // Delete api
    public function delete(Api $api_id){
        $api_id->delete();

        return redirect('/');
    }
}