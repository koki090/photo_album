<?php

use Illuminate\Database\Seeder;

class PhotosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $photos = [[
            'id' => 1, 'album_id' => 1, 'path' => 'album_photos/1_1_1.jpg'],[
            'id' => 2, 'album_id' => 1, 'path' => 'album_photos/1_1_2.jpg'],[
            'id' => 3, 'album_id' => 1, 'path' => 'album_photos/1_1_3.jpg'],[
            'id' => 4, 'album_id' => 1, 'path' => 'album_photos/1_1_4.jpg'],[
            'id' => 5, 'album_id' => 1, 'path' => 'album_photos/1_1_5.jpg'],[
            'id' => 6, 'album_id' => 2, 'path' => 'album_photos/1_2_1.jpg'],[
            'id' => 7, 'album_id' => 2, 'path' => 'album_photos/1_2_2.jpg'],[
            'id' => 8, 'album_id' => 2, 'path' => 'album_photos/1_2_3.jpg'],[
            'id' => 9, 'album_id' => 2, 'path' => 'album_photos/1_2_4.jpg'],[
            'id' => 10, 'album_id' => 2, 'path' => 'album_photos/1_2_5.jpg'],[
            'id' => 11, 'album_id' => 2, 'path' => 'album_photos/1_2_6.jpg'],[
            'id' => 12, 'album_id' => 3, 'path' => 'album_photos/1_3_1.jpg'],[
            'id' => 13, 'album_id' => 3, 'path' => 'album_photos/1_3_2.jpg'],[
            'id' => 14, 'album_id' => 3, 'path' => 'album_photos/1_3_3.jpg'],[
            'id' => 15, 'album_id' => 3, 'path' => 'album_photos/1_3_4.jpg'],[
            'id' => 16, 'album_id' => 3, 'path' => 'album_photos/1_3_5.jpg'],[
            'id' => 17, 'album_id' => 3, 'path' => 'album_photos/1_3_6.jpg'],[
            'id' => 18, 'album_id' => 4, 'path' => 'album_photos/1_4_1.jpg'],[
            'id' => 19, 'album_id' => 4, 'path' => 'album_photos/1_4_2.jpg'],[
            'id' => 20, 'album_id' => 4, 'path' => 'album_photos/1_4_3.jpg'],[
            'id' => 21, 'album_id' => 4, 'path' => 'album_photos/1_4_4.jpg'],[
            'id' => 22, 'album_id' => 4, 'path' => 'album_photos/1_4_5.jpg'],[
            'id' => 23, 'album_id' => 5, 'path' => 'album_photos/1_5_1.jpg'],[
            'id' => 24, 'album_id' => 5, 'path' => 'album_photos/1_5_2.jpg'],[
            'id' => 25, 'album_id' => 5, 'path' => 'album_photos/1_5_3.jpg'],[
            'id' => 26, 'album_id' => 5, 'path' => 'album_photos/1_5_4.jpg'],[
            'id' => 27, 'album_id' => 6, 'path' => 'album_photos/2_1_1.jpg'],[
            'id' => 28, 'album_id' => 6, 'path' => 'album_photos/2_1_2.jpg'],[
            'id' => 29, 'album_id' => 6, 'path' => 'album_photos/2_1_3.jpg'],[
            'id' => 30, 'album_id' => 6, 'path' => 'album_photos/2_1_4.jpg'],[
            'id' => 31, 'album_id' => 7, 'path' => 'album_photos/2_2_1.jpg'],[
            'id' => 32, 'album_id' => 7, 'path' => 'album_photos/2_2_2.jpg'],[
            'id' => 33, 'album_id' => 7, 'path' => 'album_photos/2_2_3.jpg'],[
            'id' => 34, 'album_id' => 7, 'path' => 'album_photos/2_2_4.jpg'],[
            'id' => 35, 'album_id' => 7, 'path' => 'album_photos/2_2_5.jpg'],[
            'id' => 36, 'album_id' => 7, 'path' => 'album_photos/2_2_6.jpg'],[
            'id' => 37, 'album_id' => 7, 'path' => 'album_photos/2_2_7.jpg'],[
            'id' => 38, 'album_id' => 7, 'path' => 'album_photos/2_2_8.jpg'],[
            'id' => 39, 'album_id' => 7, 'path' => 'album_photos/2_2_9.jpg'],[
            'id' => 40, 'album_id' => 8, 'path' => 'album_photos/2_3_1.jpg'],[
            'id' => 41, 'album_id' => 8, 'path' => 'album_photos/2_3_2.jpg'],[
            'id' => 42, 'album_id' => 8, 'path' => 'album_photos/2_3_3.jpg'],[
            'id' => 43, 'album_id' => 8, 'path' => 'album_photos/2_3_4.jpg'],[
            'id' => 44, 'album_id' => 8, 'path' => 'album_photos/2_3_5.jpg'],[
            'id' => 45, 'album_id' => 8, 'path' => 'album_photos/2_3_6.jpg'],[
            'id' => 46, 'album_id' => 8, 'path' => 'album_photos/2_3_7.jpg'],[
            'id' => 47, 'album_id' => 8, 'path' => 'album_photos/2_3_8.jpg'],[
            'id' => 48, 'album_id' => 8, 'path' => 'album_photos/2_3_9.jpg'],[
            'id' => 49, 'album_id' => 8, 'path' => 'album_photos/2_3_10.jpg'],[
            'id' => 50, 'album_id' => 8, 'path' => 'album_photos/2_3_11.jpg'],[
            'id' => 51, 'album_id' => 8, 'path' => 'album_photos/2_3_12.jpg'],[
            'id' => 52, 'album_id' => 8, 'path' => 'album_photos/2_3_13.jpg'],[
            'id' => 53, 'album_id' => 9, 'path' => 'album_photos/2_4_1.jpg'],[
            'id' => 54, 'album_id' => 9, 'path' => 'album_photos/2_4_2.jpg'],[
            'id' => 55, 'album_id' => 9, 'path' => 'album_photos/2_4_3.jpg'],[
            'id' => 56, 'album_id' => 9, 'path' => 'album_photos/2_4_4.jpg'],[
            'id' => 57, 'album_id' => 9, 'path' => 'album_photos/2_4_5.jpg'],[
            'id' => 58, 'album_id' => 9, 'path' => 'album_photos/2_4_6.jpg'],[
            'id' => 59, 'album_id' => 9, 'path' => 'album_photos/2_4_7.jpg'],[
            'id' => 60, 'album_id' => 9, 'path' => 'album_photos/2_4_8.jpg'],[
            'id' => 61, 'album_id' => 9, 'path' => 'album_photos/2_4_9.jpg'],[
            'id' => 62, 'album_id' => 10, 'path' => 'album_photos/2_5_1.jpg'],[
            'id' => 63, 'album_id' => 10, 'path' => 'album_photos/2_5_2.jpg'],[
            'id' => 64, 'album_id' => 10, 'path' => 'album_photos/2_5_3.jpg'],[
            'id' => 65, 'album_id' => 10, 'path' => 'album_photos/2_5_4.jpg'],[
            'id' => 66, 'album_id' => 10, 'path' => 'album_photos/2_5_5.jpg'],[
            'id' => 67, 'album_id' => 10, 'path' => 'album_photos/2_5_6.jpg'],[
            'id' => 68, 'album_id' => 10, 'path' => 'album_photos/2_5_7.jpg'],[
            'id' => 69, 'album_id' => 10, 'path' => 'album_photos/2_5_8.jpg'],[
            'id' => 70, 'album_id' => 10, 'path' => 'album_photos/2_5_9.jpg'],[
            'id' => 71, 'album_id' => 10, 'path' => 'album_photos/2_5_10.jpg'],[
            'id' => 72, 'album_id' => 10, 'path' => 'album_photos/2_5_11.jpg'],[
            'id' => 73, 'album_id' => 11, 'path' => 'album_photos/3_1_1.jpg'],[
            'id' => 74, 'album_id' => 11, 'path' => 'album_photos/3_1_2.jpg'],[
            'id' => 75, 'album_id' => 11, 'path' => 'album_photos/3_1_3.jpg'],[
            'id' => 76, 'album_id' => 11, 'path' => 'album_photos/3_1_4.jpg'],[
            'id' => 77, 'album_id' => 11, 'path' => 'album_photos/3_1_5.jpg'],[
            'id' => 78, 'album_id' => 11, 'path' => 'album_photos/3_1_6.jpg'],[
            'id' => 79, 'album_id' => 11, 'path' => 'album_photos/3_1_7.jpg'],[
            'id' => 80, 'album_id' => 11, 'path' => 'album_photos/3_1_8.jpg'],[
            'id' => 81, 'album_id' => 11, 'path' => 'album_photos/3_1_9.jpg'],[
            'id' => 82, 'album_id' => 12, 'path' => 'album_photos/3_2_1.jpg'],[
            'id' => 83, 'album_id' => 12, 'path' => 'album_photos/3_2_2.jpg'],[
            'id' => 84, 'album_id' => 12, 'path' => 'album_photos/3_2_3.jpg'],[
            'id' => 85, 'album_id' => 12, 'path' => 'album_photos/3_2_4.jpg'],[
            'id' => 86, 'album_id' => 12, 'path' => 'album_photos/3_2_5.jpg'],[
            'id' => 87, 'album_id' => 12, 'path' => 'album_photos/3_2_6.jpg'],[
            'id' => 88, 'album_id' => 12, 'path' => 'album_photos/3_2_7.jpg'],[
            'id' => 89, 'album_id' => 12, 'path' => 'album_photos/3_2_8.jpg'],[
            'id' => 90, 'album_id' => 12, 'path' => 'album_photos/3_2_9.jpg'],[
            'id' => 91, 'album_id' => 12, 'path' => 'album_photos/3_2_10.jpg'],[
            'id' => 92, 'album_id' => 13, 'path' => 'album_photos/3_3_1.jpg'],[
            'id' => 93, 'album_id' => 13, 'path' => 'album_photos/3_3_2.jpg'],[
            'id' => 94, 'album_id' => 13, 'path' => 'album_photos/3_3_3.jpg'],[
            'id' => 95, 'album_id' => 13, 'path' => 'album_photos/3_3_4.jpg'],[
            'id' => 96, 'album_id' => 13, 'path' => 'album_photos/3_3_5.jpg'],[
            'id' => 97, 'album_id' => 13, 'path' => 'album_photos/3_3_6.jpg'],[
            'id' => 98, 'album_id' => 13, 'path' => 'album_photos/3_3_7.jpg'],[
            'id' => 99, 'album_id' => 13, 'path' => 'album_photos/3_3_8.jpg'],[
            'id' => 100, 'album_id' => 13, 'path' => 'album_photos/3_3_9.jpg'],[
            'id' => 101, 'album_id' => 13, 'path' => 'album_photos/3_3_10.jpg'],[
            'id' => 102, 'album_id' => 13, 'path' => 'album_photos/3_3_11.jpg'],[
            'id' => 103, 'album_id' => 14, 'path' => 'album_photos/3_4_1.jpg'],[
            'id' => 104, 'album_id' => 14, 'path' => 'album_photos/3_4_2.jpg'],[
            'id' => 105, 'album_id' => 14, 'path' => 'album_photos/3_4_3.jpg'],[
            'id' => 106, 'album_id' => 14, 'path' => 'album_photos/3_4_4.jpg'],[
            'id' => 107, 'album_id' => 14, 'path' => 'album_photos/3_4_5.jpg'],[
            'id' => 108, 'album_id' => 14, 'path' => 'album_photos/3_4_6.jpg'],[
            'id' => 109, 'album_id' => 14, 'path' => 'album_photos/3_4_7.jpg'],[
            'id' => 110, 'album_id' => 14, 'path' => 'album_photos/3_4_8.jpg'],[
            'id' => 111, 'album_id' => 14, 'path' => 'album_photos/3_4_9.jpg'],[
            'id' => 112, 'album_id' => 14, 'path' => 'album_photos/3_4_10.jpg'],[
            'id' => 113, 'album_id' => 14, 'path' => 'album_photos/3_4_11.jpg'],[
            'id' => 114, 'album_id' => 15, 'path' => 'album_photos/3_5_1.jpg'],[
            'id' => 115, 'album_id' => 15, 'path' => 'album_photos/3_5_2.jpg'],[
            'id' => 116, 'album_id' => 15, 'path' => 'album_photos/3_5_3.jpg'],[
            'id' => 117, 'album_id' => 15, 'path' => 'album_photos/3_5_4.jpg'],[
            'id' => 118, 'album_id' => 15, 'path' => 'album_photos/3_5_5.jpg'],[
            'id' => 119, 'album_id' => 15, 'path' => 'album_photos/3_5_6.jpg'],[
            'id' => 120, 'album_id' => 15, 'path' => 'album_photos/3_5_7.jpg'],[
            'id' => 121, 'album_id' => 15, 'path' => 'album_photos/3_5_8.jpg'],[
            'id' => 122, 'album_id' => 15, 'path' => 'album_photos/3_5_9.jpg'],[
            'id' => 123, 'album_id' => 15, 'path' => 'album_photos/3_5_10.jpg'],[
            'id' => 124, 'album_id' => 15, 'path' => 'album_photos/3_5_11.jpg'],[
            'id' => 125, 'album_id' => 15, 'path' => 'album_photos/3_5_12.jpg'],[
            'id' => 126, 'album_id' => 15, 'path' => 'album_photos/3_5_13.jpg'],[
            'id' => 127, 'album_id' => 16, 'path' => 'album_photos/4_1_1.jpg'],[
            'id' => 128, 'album_id' => 16, 'path' => 'album_photos/4_1_2.jpg'],[
            'id' => 129, 'album_id' => 16, 'path' => 'album_photos/4_1_3.jpg'],[
            'id' => 130, 'album_id' => 16, 'path' => 'album_photos/4_1_4.jpg'],[
            'id' => 131, 'album_id' => 16, 'path' => 'album_photos/4_1_5.jpg'],[
            'id' => 132, 'album_id' => 16, 'path' => 'album_photos/4_1_6.jpg'],[
            'id' => 133, 'album_id' => 16, 'path' => 'album_photos/4_1_7.jpg'],[
            'id' => 134, 'album_id' => 16, 'path' => 'album_photos/4_1_8.jpg'],[
            'id' => 135, 'album_id' => 16, 'path' => 'album_photos/4_1_9.jpg'],[
            'id' => 136, 'album_id' => 17, 'path' => 'album_photos/4_2_1.jpg'],[
            'id' => 137, 'album_id' => 17, 'path' => 'album_photos/4_2_2.jpg'],[
            'id' => 138, 'album_id' => 17, 'path' => 'album_photos/4_2_3.jpg'],[
            'id' => 139, 'album_id' => 17, 'path' => 'album_photos/4_2_4.jpg'],[
            'id' => 140, 'album_id' => 17, 'path' => 'album_photos/4_2_5.jpg'],[
            'id' => 141, 'album_id' => 17, 'path' => 'album_photos/4_2_6.jpg'],[
            'id' => 142, 'album_id' => 17, 'path' => 'album_photos/4_2_7.jpg'],[
            'id' => 143, 'album_id' => 17, 'path' => 'album_photos/4_2_8.jpg'],[
            'id' => 144, 'album_id' => 17, 'path' => 'album_photos/4_2_9.jpg'],[
            'id' => 145, 'album_id' => 17, 'path' => 'album_photos/4_2_10.jpg'],[
            'id' => 146, 'album_id' => 17, 'path' => 'album_photos/4_2_11.jpg'],[
            'id' => 147, 'album_id' => 17, 'path' => 'album_photos/4_2_12.jpg'],[
            'id' => 148, 'album_id' => 17, 'path' => 'album_photos/4_2_13.jpg'],[
            'id' => 149, 'album_id' => 17, 'path' => 'album_photos/4_2_14.jpg'],[
            'id' => 150, 'album_id' => 17, 'path' => 'album_photos/4_2_15.jpg'],[
            'id' => 151, 'album_id' => 17, 'path' => 'album_photos/4_2_16.jpg'],[
            'id' => 152, 'album_id' => 18, 'path' => 'album_photos/4_3_1.jpg'],[
            'id' => 153, 'album_id' => 18, 'path' => 'album_photos/4_3_2.jpg'],[
            'id' => 154, 'album_id' => 18, 'path' => 'album_photos/4_3_3.jpg'],[
            'id' => 155, 'album_id' => 18, 'path' => 'album_photos/4_3_4.jpg'],[
            'id' => 156, 'album_id' => 18, 'path' => 'album_photos/4_3_5.jpg'],[
            'id' => 157, 'album_id' => 18, 'path' => 'album_photos/4_3_6.jpg'],[
            'id' => 158, 'album_id' => 18, 'path' => 'album_photos/4_3_7.jpg'],[
            'id' => 159, 'album_id' => 18, 'path' => 'album_photos/4_3_8.jpg'],[
            'id' => 160, 'album_id' => 18, 'path' => 'album_photos/4_3_9.jpg'],[
            'id' => 161, 'album_id' => 18, 'path' => 'album_photos/4_3_10.jpg'],[
            'id' => 162, 'album_id' => 18, 'path' => 'album_photos/4_3_11.jpg'],[
            'id' => 163, 'album_id' => 19, 'path' => 'album_photos/4_4_1.jpg'],[
            'id' => 164, 'album_id' => 19, 'path' => 'album_photos/4_4_2.jpg'],[
            'id' => 165, 'album_id' => 19, 'path' => 'album_photos/4_4_3.jpg'],[
            'id' => 166, 'album_id' => 19, 'path' => 'album_photos/4_4_4.jpg'],[
            'id' => 167, 'album_id' => 19, 'path' => 'album_photos/4_4_5.jpg'],[
            'id' => 168, 'album_id' => 19, 'path' => 'album_photos/4_4_6.jpg'],[
            'id' => 169, 'album_id' => 19, 'path' => 'album_photos/4_4_7.jpg'],[
            'id' => 170, 'album_id' => 19, 'path' => 'album_photos/4_4_8.jpg'],[
            'id' => 171, 'album_id' => 19, 'path' => 'album_photos/4_4_9.jpg'],[
            'id' => 172, 'album_id' => 19, 'path' => 'album_photos/4_4_10.jpg'],[
            'id' => 173, 'album_id' => 19, 'path' => 'album_photos/4_4_11.jpg'],[
            'id' => 174, 'album_id' => 19, 'path' => 'album_photos/4_4_12.jpg'],[
            'id' => 175, 'album_id' => 20, 'path' => 'album_photos/4_5_1.jpg'],[
            'id' => 176, 'album_id' => 20, 'path' => 'album_photos/4_5_2.jpg'],[
            'id' => 177, 'album_id' => 20, 'path' => 'album_photos/4_5_3.jpg'],[
            'id' => 178, 'album_id' => 20, 'path' => 'album_photos/4_5_4.jpg'],[
            'id' => 179, 'album_id' => 20, 'path' => 'album_photos/4_5_5.jpg'],[
            'id' => 180, 'album_id' => 20, 'path' => 'album_photos/4_5_6.jpg'],[
            'id' => 181, 'album_id' => 20, 'path' => 'album_photos/4_5_7.jpg'],[
            'id' => 182, 'album_id' => 21, 'path' => 'album_photos/5_1_1.jpg'],[
            'id' => 183, 'album_id' => 21, 'path' => 'album_photos/5_1_2.jpg'],[
            'id' => 184, 'album_id' => 21, 'path' => 'album_photos/5_1_3.jpg'],[
            'id' => 185, 'album_id' => 21, 'path' => 'album_photos/5_1_4.jpg'],[
            'id' => 186, 'album_id' => 21, 'path' => 'album_photos/5_1_5.jpg'],[
            'id' => 187, 'album_id' => 21, 'path' => 'album_photos/5_1_6.jpg'],[
            'id' => 188, 'album_id' => 21, 'path' => 'album_photos/5_1_7.jpg'],[
            'id' => 189, 'album_id' => 21, 'path' => 'album_photos/5_1_8.jpg'],[
            'id' => 190, 'album_id' => 21, 'path' => 'album_photos/5_1_9.jpg'],[
            'id' => 191, 'album_id' => 21, 'path' => 'album_photos/5_1_10.jpg'],[
            'id' => 192, 'album_id' => 21, 'path' => 'album_photos/5_1_11.jpg'],[
            'id' => 193, 'album_id' => 21, 'path' => 'album_photos/5_1_12.jpg'],[
            'id' => 194, 'album_id' => 21, 'path' => 'album_photos/5_1_13.jpg'],[
            'id' => 195, 'album_id' => 21, 'path' => 'album_photos/5_1_14.jpg'],[
            'id' => 196, 'album_id' => 21, 'path' => 'album_photos/5_1_15.jpg'],[
            'id' => 197, 'album_id' => 22, 'path' => 'album_photos/5_2_1.jpg'],[
            'id' => 198, 'album_id' => 22, 'path' => 'album_photos/5_2_2.jpg'],[
            'id' => 199, 'album_id' => 22, 'path' => 'album_photos/5_2_3.jpg'],[
            'id' => 200, 'album_id' => 22, 'path' => 'album_photos/5_2_4.jpg'],[
            'id' => 201, 'album_id' => 22, 'path' => 'album_photos/5_2_5.jpg'],[
            'id' => 202, 'album_id' => 22, 'path' => 'album_photos/5_2_6.jpg'],[
            'id' => 203, 'album_id' => 22, 'path' => 'album_photos/5_2_7.jpg'],[
            'id' => 204, 'album_id' => 22, 'path' => 'album_photos/5_2_8.jpg'],[
            'id' => 205, 'album_id' => 22, 'path' => 'album_photos/5_2_9.jpg'],[
            'id' => 206, 'album_id' => 23, 'path' => 'album_photos/5_3_1.jpg'],[
            'id' => 207, 'album_id' => 23, 'path' => 'album_photos/5_3_2.jpg'],[
            'id' => 208, 'album_id' => 23, 'path' => 'album_photos/5_3_3.jpg'],[
            'id' => 209, 'album_id' => 23, 'path' => 'album_photos/5_3_4.jpg'],[
            'id' => 210, 'album_id' => 23, 'path' => 'album_photos/5_3_5.jpg'],[
            'id' => 211, 'album_id' => 23, 'path' => 'album_photos/5_3_6.jpg'],[
            'id' => 212, 'album_id' => 23, 'path' => 'album_photos/5_3_7.jpg'],[
            'id' => 213, 'album_id' => 23, 'path' => 'album_photos/5_3_8.jpg'],[
            'id' => 214, 'album_id' => 23, 'path' => 'album_photos/5_3_9.jpg'],[
            'id' => 215, 'album_id' => 23, 'path' => 'album_photos/5_3_10.jpg'],[
            'id' => 216, 'album_id' => 23, 'path' => 'album_photos/5_3_11.jpg'],[
            'id' => 217, 'album_id' => 23, 'path' => 'album_photos/5_3_12.jpg'],[
            'id' => 218, 'album_id' => 23, 'path' => 'album_photos/5_3_13.jpg'],[
            'id' => 219, 'album_id' => 24, 'path' => 'album_photos/5_4_1.jpg'],[
            'id' => 220, 'album_id' => 24, 'path' => 'album_photos/5_4_2.jpg'],[
            'id' => 221, 'album_id' => 24, 'path' => 'album_photos/5_4_3.jpg'],[
            'id' => 222, 'album_id' => 24, 'path' => 'album_photos/5_4_4.jpg'],[
            'id' => 223, 'album_id' => 24, 'path' => 'album_photos/5_4_5.jpg'],[
            'id' => 224, 'album_id' => 24, 'path' => 'album_photos/5_4_6.jpg'],[
            'id' => 225, 'album_id' => 24, 'path' => 'album_photos/5_4_7.jpg'],[
            'id' => 226, 'album_id' => 24, 'path' => 'album_photos/5_4_8.jpg'],[
            'id' => 227, 'album_id' => 24, 'path' => 'album_photos/5_4_9.jpg'],[
            'id' => 228, 'album_id' => 24, 'path' => 'album_photos/5_4_10.jpg'],[
            'id' => 229, 'album_id' => 24, 'path' => 'album_photos/5_4_11.jpg'],[
            'id' => 230, 'album_id' => 24, 'path' => 'album_photos/5_4_12.jpg'],[
            'id' => 231, 'album_id' => 24, 'path' => 'album_photos/5_4_13.jpg'],[
            'id' => 232, 'album_id' => 24, 'path' => 'album_photos/5_4_14.jpg'],[
            'id' => 233, 'album_id' => 24, 'path' => 'album_photos/5_4_15.jpg'],[
            'id' => 234, 'album_id' => 25, 'path' => 'album_photos/5_5_1.jpg'],[
            'id' => 235, 'album_id' => 25, 'path' => 'album_photos/5_5_2.jpg'],[
            'id' => 236, 'album_id' => 25, 'path' => 'album_photos/5_5_3.jpg'],[
            'id' => 237, 'album_id' => 25, 'path' => 'album_photos/5_5_4.jpg'],[
            'id' => 238, 'album_id' => 25, 'path' => 'album_photos/5_5_5.jpg'],[
            'id' => 239, 'album_id' => 25, 'path' => 'album_photos/5_5_6.jpg'],[
            'id' => 240, 'album_id' => 25, 'path' => 'album_photos/5_5_7.jpg'],[
            'id' => 241, 'album_id' => 25, 'path' => 'album_photos/5_5_8.jpg'],[
            'id' => 242, 'album_id' => 25, 'path' => 'album_photos/5_5_9.jpg'],[
            'id' => 243, 'album_id' => 25, 'path' => 'album_photos/5_5_10.jpg'],[
            'id' => 244, 'album_id' => 25, 'path' => 'album_photos/5_5_11.jpg']];
            
        foreach($photos as $photo){
            Db::table('photos')->insert($photo);
        }
    }
}
