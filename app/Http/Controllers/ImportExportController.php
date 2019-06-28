<?php

namespace App\Http\Controllers;

use App\Api;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Response;

class ImportExportController extends Controller
{
    public function export(){
        $data = Api::join('database', 'database.api_id', '=', 'api.id')->join('routes', 'routes.api_id', '=', 'api.id')->get()->toArray();

        var_dump(json_encode($data));
        die;
        return View('export')->with('data', json_encode($data));
    }

    public function import(){

    }
}