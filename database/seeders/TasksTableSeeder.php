<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Task;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;


class TasksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Task::factory()->count(10)->create();

        //1件のデータ
        //  $titles = ["テスト","練習","実践"];
        

        // foreach($titles as $title){
        //     DB::table('tasks')->insert([
        //         'title' => $title,
        //         'folder_id' => 3,
        //         'due_date'  => Carbon::now(),
        //         'created_at' => Carbon::now(),
        //         'updated_at' => Carbon::now(),
        //            ]);

        // }
}
}
