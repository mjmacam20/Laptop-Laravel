<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    function view_category(){
        return view("admin.category");
    }
}
