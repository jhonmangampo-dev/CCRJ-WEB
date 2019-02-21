<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestsController extends Controller
{
    public function index()
    {
        $data = array(
            'title' => 'TEST',
            'services' => ['Web Design', 'Programming', 'SEO']
        );

        return view('test.index')->with($data);
    }
}
