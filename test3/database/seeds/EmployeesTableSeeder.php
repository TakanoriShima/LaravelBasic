<?php

use Illuminate\Database\Seeder;
use App\Employee;
use Faker\Factory as Faker;

class EmployeesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //一括削除
        Employee::truncate();
        DB::table('employees')->delete();
        $faker = Faker::create('ja_JP');

        for($i = 0; $i < 10; $i++){
            Employee::create([
                'name'=> $faker->name,
                'email' => $faker->email,
                'password' => $faker->password,
                'remember_token' => $faker->password,
                'created_at' => $faker->date($format='Y-m-d',$max='now'),
                'updated_at' => $faker->date($format='Y-m-d',$max='now')
            ]);
        }
    
    }
}
