<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// se extiene el root controller para poder crear metodos
class JobController extends Controller
{
    public function index()
    {
        $title = 'Availabel Jobs';
        $jobs = [
            'web development',
            'database admin',
            'systems analyst'
        ];

        return view('jobs.index', compact('title', 'jobs'));
    }

    public function create()
    {
        return view('jobs.create');
    }
}
