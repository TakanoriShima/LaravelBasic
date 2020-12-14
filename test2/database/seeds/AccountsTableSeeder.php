<?php

use Illuminate\Database\Seeder;
use \App\Account

class AccountsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('accounts')->delete();
        $faker = Faker\Factory::create('ja_JP');
        for($i = 0; $i < 10; $i++){
            \App\Account
        }
        
        
        /***
        \DB::table('accounts')->insert([
            [
                'name'    => '川端 莉緒',
                'email'   => 'kawabata_rio@example.com',
                'password' => 'kawabatakawabata',
                'remember_token' => 'kawabatakawabata',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
             ],
            [
                'name'    => '小玉 隆博',
                'email' => 'kodama_takahiro@example.com',
                'password' => 'kodamakodamakodama',
                'remember_token' => 'kodamakodamakodama',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'name'    => '岩井 圭',
                'email' => 'iwai_kei@example.com',
                'password' => 'iwaiiwaiiwai',
                'remember_token' => 'iwaiiwaiiwai',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
        ]);
        ***/
    }
}
