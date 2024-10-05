<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;

class TaskController extends Controller {
    public function index() {
        return Task::all();
    }

    public function store(Request $request) {
        $task = new Task();
        $task->title = $request->title;
        $task->is_completed = $request->is_completed;
        $task->save();
        return response()->json($task, 201);
    }

    public function update(Request $request, Task $task) {
        $task->is_completed = $request->is_completed;
        $task->save();
        return $task;
    }

    public function destroy(Task $task) {
        $task->delete();
        return response(null, 204);
    }
}
