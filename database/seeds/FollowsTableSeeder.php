<?php

use Illuminate\Database\Seeder;

class FollowsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $follows = [[
            'id' => 1,
            'user_id' => 1,
            'follow_id' => 2],[
            'id' => 2,
            'user_id' => 1,
            'follow_id' => 3],[
            'id' => 3,
            'user_id' => 1,
            'follow_id' => 4],[
            'id' => 4,
            'user_id' => 1,
            'follow_id' => 5],[
            'id' => 5,
            'user_id' => 2,
            'follow_id' => 3],[
            'id' => 6,
            'user_id' => 2,
            'follow_id' => 4],[
            'id' => 7,
            'user_id' => 2,
            'follow_id' => 5],[
            'id' => 8,
            'user_id' => 3,
            'follow_id' => 4],[
            'id' => 9,
            'user_id' => 3,
            'follow_id' => 5],[
            'id' => 10,
            'user_id' => 4,
            'follow_id' => 5],[
            'id' => 11,
            'user_id' => 5,
            'follow_id' => 3],[
            'id' => 12,
            'user_id' => 5,
            'follow_id' => 4]];
            
        foreach($follows as $follow){
            DB::table('follows')->insert($follow);
        }
    }
}
