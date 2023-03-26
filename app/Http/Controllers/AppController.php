<?php

namespace App\Http\Controllers;
use App\Models\Project;

use Illuminate\Routing\Route;

use Request;

class AppController extends Controller
{
    public function index() {
        return view('welcome');
    }
}
