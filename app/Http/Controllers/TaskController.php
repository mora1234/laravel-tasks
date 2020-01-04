<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;

class TaskController extends Controller
{
    public function postTask(Request $request) {
      $task = new Task();
      $task->is_completed = $request->input('task')['is_completed'];
      $task->title = $request->input('task')['title'];
      $task->save();
      return response()->json($task, 201);
    }

   public function getTasks(){
      $tasks = Task::all();
      return response()->json($tasks, 200);
    }

    public function getTask($id){
      $task = Task::where('id', $id)->first();
      return response()->json($task, 200);
    }

    public function putTask(Request $request, $id){
      $task = Task::find($id);
      $task->is_completed = $request->input('task')['is_completed'];
      $task->title = $request->input('task')['title'];
      $task->save();
      return response()->json($task, 200);
    }

    public function deleteTask($id){
      $task = Task::find($id);
      $task->delete();
      return response()->json([], 200);
    }   
}
