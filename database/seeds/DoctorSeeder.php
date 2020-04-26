<?php

use Illuminate\Database\Seeder;

class DoctorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items = [

            ['id' => 1, "first_name" => 'Doctor 1',     'last_name' => "",    'email' => 'doctor1@doctor.com',     'mobile' => '',     'address' => '',    'state' => "",    'pin' => ""],
            ['id' => 2, "first_name" => 'Doctor 2',     'last_name' => "",    'email' => 'doctor2@doctor.com',     'mobile' => '',     'address' => '',    'state' => "",    'pin' => ""],
            ['id' => 3, "first_name" => 'Doctor 3',     'last_name' => "",    'email' => 'doctor3@doctor.com',     'mobile' => '',     'address' => '',    'state' => "",    'pin' => ""],
            ['id' => 4, "first_name" => 'Doctor 4',     'last_name' => "",    'email' => 'doctor4@doctor.com',     'mobile' => '',     'address' => '',    'state' => "",    'pin' => ""],
            ['id' => 5, "first_name" => 'Doctor 5',     'last_name' => "",    'email' => 'doctor5@doctor.com',     'mobile' => '',     'address' => '',    'state' => "",    'pin' => ""],


        ];

        foreach ($items as $item) {
            \App\Doctor::create($item);
        }
    }
}
