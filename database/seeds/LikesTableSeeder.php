<?php

use Illuminate\Database\Seeder;

class LikesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $likes = [[
            'id' => 1,
            'user_id' => 1,
            'album_id' => 6],[
            'id' => 2,
            'user_id' => 1,
            'album_id' => 7],[
            'id' => 3,
            'user_id' => 1,
            'album_id' => 11],[
            'id' => 4,
            'user_id' => 1,
            'album_id' => 16],[
            'id' => 5,
            'user_id' => 1,
            'album_id' => 21],[
            'id' => 6,
            'user_id' => 2,
            'album_id' => 11],[
            'id' => 7,
            'user_id' => 2,
            'album_id' => 12],[
            'id' => 8,
            'user_id' => 2,
            'album_id' => 16],[
            'id' => 9,
            'user_id' => 2,
            'album_id' => 21],[
            'id' => 10,
            'user_id' => 2,
            'album_id' => 1],[
            'id' => 11,
            'user_id' => 3,
            'album_id' => 16],[
            'id' => 12,
            'user_id' => 3,
            'album_id' => 17],[
            'id' => 13,
            'user_id' => 3,
            'album_id' => 21],[
            'id' => 14,
            'user_id' => 3,
            'album_id' => 1],[
            'id' => 15,
            'user_id' => 3,
            'album_id' => 6],[
            'id' => 16,
            'user_id' => 4,
            'album_id' => 21],[
            'id' => 17,
            'user_id' => 4,
            'album_id' => 22],[
            'id' => 18,
            'user_id' => 4,
            'album_id' => 1],[
            'id' => 19,
            'user_id' => 4,
            'album_id' => 6],[
            'id' => 20,
            'user_id' => 4,
            'album_id' => 11],[
            'id' => 21,
            'user_id' => 5,
            'album_id' => 1],[
            'id' => 22,
            'user_id' => 5,
            'album_id' => 2],[
            'id' => 23,
            'user_id' => 5,
            'album_id' => 6],[
            'id' => 24,
            'user_id' => 5,
            'album_id' => 11],[
            'id' => 25,
            'user_id' => 5,
            'album_id' => 16]];
            
        foreach($likes as $like){
            DB::table('likes')->insert($like);
        }
    }
}
