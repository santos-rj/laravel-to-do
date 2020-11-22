<?php

namespace App\Http\Controllers;

use App\Models\Task;

class TasksController extends Controller
{
    public function index()
    {
        return Task::all();
    }

    public function store(Request $request)
    {

        $task = Task::create([
            'name' => $request->input('name'),
            'complete' => $request->input('complete'),
        ]);

        return $task;
    }
}
