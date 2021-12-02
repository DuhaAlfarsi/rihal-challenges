<?php

use Illuminate\Database\Seeder;

use App\User;
use App\Section;
use App\Country;
use App\Student;


class CreateUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = [
            [
               'name'=>'Admin',
               'email'=>'admin@gmail.com',
               'is_admin'=>'1',
               'password'=> bcrypt('123456'),
            ],
        ];
        
        $country = Country::create([
        	'name' => 'Oman', 
        ]);

        $section = Section::create([
             'class_name' => 'A110',
        ]);

        $student = Student::create([
              'section_id' => '3',
              'country_id' => '3',
              'sname' => 'Salim',
              'date_of_birth' => '1993-12-07',

        ]);

        }
    }

