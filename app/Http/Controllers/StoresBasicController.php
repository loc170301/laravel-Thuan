<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\StoresBasic;

class StoresBasicController extends Controller
{
    public function index(){ 
        $sb = StoresBasic::paginate(5);       
        return view('StoresBasic.demo_list', compact('sb'));
    }
}
