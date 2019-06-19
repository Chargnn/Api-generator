<?php

namespace App\Http\Controllers;

use App\Api;
use App\Database;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\Route;

class DatabaseController extends Controller
{
    // Store api in DB
    public function store(Request $request){

        return redirect('/');
    }

    // Update api
    public function update(Request $request){

        return redirect('/');
    }

    // Delete api
    public function delete(){

        return redirect('/');
    }
}