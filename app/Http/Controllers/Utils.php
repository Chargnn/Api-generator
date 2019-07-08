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

    public function testDbConnection(){
        try{
            new \PDO('mysql:dbname='.request('database_database').';host='.request('database_host').';port='.request('database_port'),
                request('database_user'),
                request('database_password'),
                [\PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION]);
            return 'true';
        } catch(\Exception $e) {
            return $e;
        }
    }

    public static function testDbConnectionManual(Database $database){
        try{
            new \PDO('mysql:dbname='.$database->database_database.';host='.$database->database_host.';port='.$database->database_port,
                $database->database_user,
                $database->database_password,
                [\PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION]);
            return 'true';
        } catch(\Exception $e) {
            return $e;
        }
    }
}