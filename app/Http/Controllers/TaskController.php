<?php

namespace App\Http\Controllers;
use App\Models\Folder;
use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TaskController extends Controller
{
    public function index()
    {
        //全てのフォルダ取得
       $folders = Folder::all();
       return view('tasks/index',['folders' => $folders]);
       //選ばれたフォルダ取得
      // $current_folder = Folder::find($id);

    //   $tasks = DB::table('tasks')->get();
    //   return view('tasks.index', ['tasks' => $tasks]); 

    }

    public function task()
    {
    $tasks = Task::all();   // Eloquent"Member"で全データ取得
    return view('tasks.index', ["tasks" => $tasks]);

//          // $message= 'ああ';
//         // return view('home.index')->with('message',$message);
//         //$test_1 = "テスト";
//         //return view('test.normal',compact('test_1'));  
    }
 }




