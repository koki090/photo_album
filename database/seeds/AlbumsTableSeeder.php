<?php

use Illuminate\Database\Seeder;

class AlbumsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $albums = [[
            'id' => 1,
            'user_id' => 1,
            'title' => '椅子コレクション',
            'comment' => '好きなタイプの椅子を集めました！',
            'release' => 1],[
            'id' => 2,
            'user_id' => 1,
            'title' => '好きな花',
            'comment' => 'きれいな花を集めました！',
            'release' => 1],[
            'id' => 3,
            'user_id' => 1,
            'title' => '奇麗な景色',
            'comment' => '見に行ってみたい景色を集めました！',
            'release' => 1],[
            'id' => 4,
            'user_id' => 1,
            'title' => 'ネコ様',
            'comment' => 'アレルギーで触れないので、写真を集めました',
            'release' => 0],[
            'id' => 5,
            'user_id' => 1,
            'title' => '犬君',
            'comment' => '犬は大好きです。めっちゃ触ります！',
            'release' => 1],[
            'id' => 6,
            'user_id' => 2,
            'title' => 'スイーツ・お菓子',
            'comment' => 'おいしそうです。',
            'release' => 1],[
            'id' => 7,
            'user_id' => 2,
            'title' => '花火',
            'comment' => '手持ち花火も好きですが、やっぱり打ち上げが好きです！',
            'release' => 1],[
            'id' => 8,
            'user_id' => 2,
            'title' => '鳥類',
            'comment' => '昔スズメを抱っこした事がありますが、あまりに軽くてびっくりしました！',
            'release' => 1],[
            'id' => 9,
            'user_id' => 2,
            'title' => '山',
            'comment' => '山登りは苦手なので、写真で満足することにします！',
            'release' => 0],[
            'id' => 10,
            'user_id' => 2,
            'title' => '自動車',
            'comment' => '公共交通機関は苦手です。10時間移動以内なら車で行きます！',
            'release' => 0],[
            'id' => 11,
            'user_id' => 3,
            'title' => '傘コレクション',
            'comment' => '石川県での天気はほとんど雨です！弁当忘れても傘忘れるな！',
            'release' => 1],[
            'id' => 12,
            'user_id' => 3,
            'title' => '海',
            'comment' => '小学生のころ終末処理場の見学で、海が苦手になりました！一応泳げます。',
            'release' => 1],[
            'id' => 13,
            'user_id' => 3,
            'title' => 'お城',
            'comment' => '私が撮ってきたものではないですが、お城は写真映えしますね！',
            'release' => 1],[
            'id' => 14,
            'user_id' => 3,
            'title' => '飛行機',
            'comment' => '小学校であだ名が「ひこーき」でした！',
            'release' => 1],[
            'id' => 15,
            'user_id' => 3,
            'title' => 'ペンギンさん',
            'comment' => 'ペンギンさんが好きです。でも、ゾウさんのほうがもっと好きです！',
            'release' => 1],[
            'id' => 16,
            'user_id' => 4,
            'title' => '観葉植物',
            'comment' => '退職祝い（？）にパキラをもらいました。近々鉢替えする予定です！',
            'release' => 1],[
            'id' => 17,
            'user_id' => 4,
            'title' => '紅葉',
            'comment' => '毎年紅葉の時期を過ぎてニュースで見てから、見に行きたくなります！',
            'release' => 1],[
            'id' => 18,
            'user_id' => 4,
            'title' => '電車',
            'comment' => '公共交通機関は苦手です。長時間乗ると酔ってしまします。',
            'release' => 1],[
            'id' => 19,
            'user_id' => 4,
            'title' => '廃墟（廃屋）',
            'comment' => 'もうちょっといい感じの廃墟探してたのですが、廃墟というより廃屋という感じになってしましました。',
            'release' => 1],[
            'id' => 20,
            'user_id' => 4,
            'title' => '寅年',
            'comment' => '2022年寅年！虎イ＆エラーの精神で頑張ります！',
            'release' => 1],[
            'id' => 21,
            'user_id' => 5,
            'title' => '夜空',
            'comment' => '昼より夜の方が、作業がはかどる気はしませんか！？',
            'release' => 1],[
            'id' => 22,
            'user_id' => 5,
            'title' => '唐揚げ',
            'comment' => 'コロッケの次に好きな揚げ物です！個人的にはおろしポン酢が一番合うと思ってます！',
            'release' => 1],[
            'id' => 23,
            'user_id' => 5,
            'title' => '喫茶店・カフェ',
            'comment' => '雰囲気は好きでよく行きます！最近は禁煙の所が増えて愛煙家としては肩身が狭いですね！',
            'release' => 1],[
            'id' => 24,
            'user_id' => 5,
            'title' => '滝',
            'comment' => '写真がきれいで行ってみたくなります！',
            'release' => 0],[
            'id' => 25,
            'user_id' => 5,
            'title' => 'マンション・集合住宅',
            'comment' => '大学では建築専攻でした！九龍城砦に行ってみたかったです！',
            'release' => 0]];
        
        foreach($albums as $album){
            DB::table('albums')->insert($album);
        }
    }
}
