<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SupplierController extends Controller
{
    public function supplier(){
        return view('backend.pages.supplier');
    }

}