<?php

namespace App\Http\Controllers;

use App\Api;
use App\Database;
use App\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Response;

class Utils extends Controller
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

    public function testDbConnection(Request $request){

        try{
            $this->pdo = new \PDO($request->database_host,
                                 $request->database_user,
                                 $request->database_password,
                                 [\PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION]);
            return 'true';
        } catch(\Exception $e) {
            return 'false';
        }
    }
}