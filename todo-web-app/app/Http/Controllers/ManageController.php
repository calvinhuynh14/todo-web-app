<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ManageController extends Controller
{
    public function displayManage()
    {
        return view('manage');
    }
}