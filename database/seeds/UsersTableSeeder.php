<?php

use Illuminate\Database\Seeder;
use App\Models\Users\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            ['over_name' => '徳長','under_name' => '龍之介','over_name_kana' => 'トクナガ','under_name_kana' => 'リュウノスケ', 'mail_address' => Str::random(6).'@gmail.com', 'sex' => '1', 'birth_day' => '1999-02-08', 'role' => '3', 'password' => Hash::make('password')],
            ['over_name' => '勅使ヶ原','under_name' => '海斗','over_name_kana' => 'テシガハラ','under_name_kana' => 'カイト', 'mail_address' => Str::random(6).'@gmail.com', 'sex' => '1', 'birth_day' => '1998-04-27', 'role' => '2', 'password' => Hash::make('password')],
            ['over_name' => '大熊','under_name' => '一輝','over_name_kana' => 'オオクマ','under_name_kana' => 'カズキ', 'mail_address' => Str::random(6).'@gmail.com', 'sex' => '3', 'birth_day' => '1999-02-24', 'role' => '1', 'password' => Hash::make('password')],
            ['over_name' => '二宮','under_name' => '祐美','over_name_kana' => 'ニノミヤ','under_name_kana' => 'ユミ', 'mail_address' => Str::random(6).'@gmail.com', 'sex' => '2', 'birth_day' => '1998-06-21', 'role' => '3', 'password' => Hash::make('password')],
        ]);
    }
}
