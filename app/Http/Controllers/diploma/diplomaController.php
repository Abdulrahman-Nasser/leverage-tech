<?php

namespace App\Http\Controllers\diploma;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class diplomaController extends Controller
{
    public function index(){
        return view('diploma.add');
    }
}
