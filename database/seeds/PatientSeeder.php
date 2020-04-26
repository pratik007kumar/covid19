<?php

use Illuminate\Database\Seeder;

class PatientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items = [

            ['id' => 1, "first_name" => 'Patient 1',     'last_name' => "",    'email' => 'patient1@patient.com',     'mobile' => '',     'address' => '',    'state' => "",    'pin' => ""],
            ['id' => 2, "first_name" => 'Patient 2',     'last_name' => "",    'email' => 'patient2@patient.com',     'mobile' => '',     'address' => '',    'state' => "",    'pin' => ""],
            ['id' => 3, "first_name" => 'Patient 3',     'last_name' => "",    'email' => 'patient3@patient.com',     'mobile' => '',     'address' => '',    'state' => "",    'pin' => ""],
            ['id' => 4, "first_name" => 'Patient 4',     'last_name' => "",    'email' => 'patient4@patient.com',     'mobile' => '',     'address' => '',    'state' => "",    'pin' => ""],
            ['id' => 5, "first_name" => 'Patient 5',     'last_name' => "",    'email' => 'patient5@patient.com',     'mobile' => '',     'address' => '',    'state' => "",    'pin' => ""],


        ];

        foreach ($items as $item) {
            \App\Patient::create($item);
        }
    }
}
