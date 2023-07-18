<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Project;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = Project::paginate(5); //al posto di all si puo mettere paginate(numero di visualizzazioni per volta)
        return response()->json($projects);
    }
    public function show()
    {
        //
    }
}
