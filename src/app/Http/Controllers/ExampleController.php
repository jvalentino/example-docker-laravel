<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExampleController extends Controller
{
    public function index()
    {
        return response()->json(['name' => 'John', 'state' => 'TX']);
    }
}
