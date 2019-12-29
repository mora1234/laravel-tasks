<?php

namespace App\Http\Controllers;
use App\Task;

class TaskController extends Controller
{
    public function postTask(Request $request){
      $task = new Task();
      $task->title = $request->input('title');
      $task->is_complited = $request->input('is_complited');
      $task->save();
      return response()->json(['task' => $task], 201);

      // $oData = $request->all();
      // $sId = GUID();
      // $oData["data"]["id"] = $sId;
      // $oAtt = $oData["data"]["attributes"];
      // $sTitle = $oAtt["title"];
      // $bIsComplited = $oAtt["is_complited"];

      // DB::table('tasks')->insert(['id' => $sId, 'title' => $sTitle, 'is_complited' => $bIsComplited]);

      // return $oData;


    }

   public function getTasks(){
      $tasks = Task::all();
      $response = [
        'tasks' => $tasks
      ];
      return response()->json($response, 200);
    }

    public function getTask($id){
      $task = Task::where('id', $id)->first();
      $response = [
        'task' => $task
      ];
      return response()->json($response, 200);
    }

    public function putTask(Request $request, $id){
      $task = Task::find($id);
      $task->title = $request->input('title');
      $task->is_complited = $request->input('is_complited');
      $task->save();
      return response()->json(['task' => $task], 200);
    }

    public function deleteTask($id){
      $task = Task::find($id);
      $task->delete();
      return response()->json([], 200);
    }

        
}
