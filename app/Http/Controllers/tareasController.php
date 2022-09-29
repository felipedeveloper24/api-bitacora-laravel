<?php

namespace App\Http\Controllers;

use App\Models\tarea;
use Illuminate\Http\Request;

class tareasController extends Controller
{
    public function index(){
        $tareas = tarea::all();
        return $tareas;
    }
}
