<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $data = array(
            'title' => 'ADMIN PANEL'
        );

        return view('admin.index')->with($data);
    }
}
