<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Todo;

class TaskController extends Controller
{
    public function index()
    {
        return Todo::all();
    }

    public function store(Request $request)
    {
        $task = new Todo();
        $task->name = $request->name;
        $task->save();

        return response()->json($task, 201);
    }

    public function destroy($id)
    {
        $task = Todo::find($id);

        if ($task) {
            $task->delete();
            return response()->json(['message' => 'Task deleted'], 200);
        }

        return response()->json(['message' => 'Task not found'], 404);
    }
}
