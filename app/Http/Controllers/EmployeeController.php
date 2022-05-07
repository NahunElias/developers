<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class EmployeeController extends Controller
{
    public function index(){        
        $data = file_get_contents("ejemplo.json");
        $employees = json_decode($data, true);

        return view('welcome', compact('employees'));
    }
}
