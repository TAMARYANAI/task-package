<?php

namespace Mypackage\controller;

use Illuminate\Http\Request;
use packages\rlpackages\mypackage\src\Task;

class TaskController extends Controller
{
    public function index()
    {
        dd('index');
        return redirect()->route('task.create');
    }


    public function store()
    {
        $input = Request::all();
        Task::create($input);
        dd('store');
        return redirect()->route('task.create');
    }


    public function update($id)
    {
        $input = Request::all();
        $task = Task::findOrFail($id);
        $task->update($input);
        dd('update');
        return redirect()->route('task.create');
    }

    public function destroy($id)
    {
        $task = Task::findOrFail($id);
        $task->delete();
        dd('delete');
        return redirect()->route('task.create');
    }
}
