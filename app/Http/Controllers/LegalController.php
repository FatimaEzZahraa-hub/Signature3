<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LegalController extends Controller
{
    public function conditions()
    {
        return view('legal.conditions');
    }

    public function confidentialite()
    {
        return view('legal.confidentialite');
    }

    public function mentions()
    {
        return view('legal.mentions');
    }
} 