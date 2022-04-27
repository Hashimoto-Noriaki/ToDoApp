<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Folder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth; //認証機能追加

class FolderController extends Controller
{
    //
    public function FolderController(){
        return view('folder.create');
    }

    public function create(Request $request)
    {
        
        //フォルダモデルのインスタンスを作成
        $folder = new Folder();
        //タイトルに入力値を入れる
        $folder->title = $request->title;
        
        return view('folder.create');
        //インスタンスの状態DBに書き込む
        $folder->save();

        return redirect()->route('tasks.index',[
            'id' => $folder->id,
        ]);
    } 

    public function index()
    {
        // ログイン中のユーザー情報
        $folder = Auth::user();
        //dd($folder);
       // dd(Auth::user());
        return view('folder.index')->with('folder',$folder); //viewにこの変数を渡す
       // return view('folder.index')->with('folders', $folders);


    //eloquentの書き方
    //$folders = Folder::get();//データを全取得
    //dd($folders);
    //Auth::user();//認証されているユーザー認証
    //dd(Auth::user());

       //$folders = Auth::user()->get(); 
       //dd($folders);
       //$folder = Folder::where("user_id", "=",11)->first();
       //$folder = Folder::where("folder_id", "=",11)->first();
       //dd($folder);
       //return view('folder.index', ['folders' => $folders]);
       //return view('folder.index')->with('folder', $folders);//viewにこの変数を渡す
       //dd($folders->id);



         //クエリビルダ 動いた
        // $folder = DB::table('folders')->where('id',1)->first();
        //return $folder->id;


        // withを使う
       // $folder = Folder::find("1");
        //dd($folder);
        //  $folder = Folder::with('folder_id')->find(1);;
         //dd($folder);
        // return $folder;
        //return view('folders.index',['folders' => $folder]);     
    }

    Public function Folder()
{
    return  $this->hasOne(Folder::class);
}





    public function __construct()
    {
        $this->middleware('auth'); // authミドルウェアを使い、特定のルートやアクションを、認証済みユーザーだけがアクセスできるよう保護する

    }
}
