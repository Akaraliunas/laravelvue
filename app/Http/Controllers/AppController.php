<?php

namespace App\Http\Controllers;
use App\Models\Project;

use Illuminate\Routing\Route;

use Request;

class AppController extends Controller
{
    public function index() {

        $infoFromController = Project::latest()->paginate(5);

        return view('welcome', compact('infoFromController'));
    }
}
