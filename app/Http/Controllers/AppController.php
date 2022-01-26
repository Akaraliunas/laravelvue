<?php

namespace App\Http\Controllers;
use Illuminate\Routing\Route;

use Request;

class AppController extends Controller
{
    public function index() {
        $currentPath = 'testas asd';

        return view('welcome', compact('currentPath'));
    }
}
