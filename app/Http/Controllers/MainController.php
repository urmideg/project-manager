<?php

namespace App\Http\Controllers;

use App\Task;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        $works = Task::where('status', 'Реализация')->get();
        $complites = Task::where('status', 'Завершена')->get();
        return view('welcome', [
            'works' => $works,
            'complites' => $complites
        ]);
    }
}
