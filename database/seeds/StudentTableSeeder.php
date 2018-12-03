<?php

use Illuminate\Database\Seeder;

class StudentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dataArray = [];
        for($i=0;$i<6;$i++)
        {
            array_push($dataArray, array(
                'name' => str_random(10),
                'email' => str_random(10) . '@gmail.com',
                'phone_number' =>str_random(10),
                'birthday' =>date("Y-m-d", mt_rand(1, time())),
                'address' =>str_random(50),
//                'sex' =>boolValue(numberBetween(0,1),),
                'person_contact_1' => str_random(10),
                'phone_person_contact_1' =>str_random(50),
                'person_contact_2' => str_random(10),
                'phone_person_contact_2' =>str_random(50),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ));
        }

        DB::table('student')->insert($dataArray);
    }
}
