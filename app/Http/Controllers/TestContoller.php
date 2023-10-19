<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Test;  // Import the model for the 'test' table

class TestController extends Controller
{
    public function index()
    {
        $data = Test::all();  // Get all data from 'test' table
        return response()->json($data);  // Return data as JSON
    }
}

