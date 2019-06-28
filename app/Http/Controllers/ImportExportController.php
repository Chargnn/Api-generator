<?php

namespace App\Http\Controllers;

use App\Api;
use App\Database;
use App\Route;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Response;

class ImportExportController extends Controller
{
    public function export(){
        $apis = Api::all();
        $routes = Route::all();
        $databases = Database::all();

        $data = [];
        $data['apis'] = $apis;
        $data['routes'] = $routes;
        $data['databases'] = $databases;

        return View('export')->with('data', json_encode($data));
    }

    public function import(){

    }
}