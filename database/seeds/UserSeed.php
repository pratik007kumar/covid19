<?php

use Illuminate\Database\Seeder;

class UserSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items = [

            ['id' => 1, 'name' => 'Admin', 'email' => 'admin@admin.com', 'password' => '$2y$10$orStKdMul9T8/ICKFINfc.DHommWHg8dSuvfzJUygmGFRRct3jhFq', 'remember_token' => '',],

            ['id' => 2, 'name' => 'Doctor1', 'email' => 'doctor1@doctor.com', 'password' => '$2y$10$orStKdMul9T8/ICKFINfc.DHommWHg8dSuvfzJUygmGFRRct3jhFq', 'remember_token' => '',],
            ['id' => 3, 'name' => 'Doctor2', 'email' => 'doctor2@doctor.com', 'password' => '$2y$10$orStKdMul9T8/ICKFINfc.DHommWHg8dSuvfzJUygmGFRRct3jhFq', 'remember_token' => '',],
            ['id' => 4, 'name' => 'Doctor3', 'email' => 'doctor3@doctor.com', 'password' => '$2y$10$orStKdMul9T8/ICKFINfc.DHommWHg8dSuvfzJUygmGFRRct3jhFq', 'remember_token' => '',],
            ['id' => 5, 'name' => 'Doctor4', 'email' => 'doctor4@doctor.com', 'password' => '$2y$10$orStKdMul9T8/ICKFINfc.DHommWHg8dSuvfzJUygmGFRRct3jhFq', 'remember_token' => '',],
            ['id' => 6, 'name' => 'Doctor5', 'email' => 'doctor5@doctor.com', 'password' => '$2y$10$orStKdMul9T8/ICKFINfc.DHommWHg8dSuvfzJUygmGFRRct3jhFq', 'remember_token' => '',],

            ['id' => 7, 'name' => 'Patient1', 'email' => 'patient1@patient.com', 'password' => '$2y$10$orStKdMul9T8/ICKFINfc.DHommWHg8dSuvfzJUygmGFRRct3jhFq', 'remember_token' => '',],
            ['id' => 8, 'name' => 'Patient2', 'email' => 'patient2@patient.com', 'password' => '$2y$10$orStKdMul9T8/ICKFINfc.DHommWHg8dSuvfzJUygmGFRRct3jhFq', 'remember_token' => '',],
            ['id' => 9, 'name' => 'Patient3', 'email' => 'patient3@patient.com', 'password' => '$2y$10$orStKdMul9T8/ICKFINfc.DHommWHg8dSuvfzJUygmGFRRct3jhFq', 'remember_token' => '',],
            ['id' => 10, 'name' => 'Patient4', 'email' => 'patient4@patient.com', 'password' => '$2y$10$orStKdMul9T8/ICKFINfc.DHommWHg8dSuvfzJUygmGFRRct3jhFq', 'remember_token' => '',],
            ['id' => 11, 'name' => 'Patient5', 'email' => 'patient5@patient.com', 'password' => '$2y$10$orStKdMul9T8/ICKFINfc.DHommWHg8dSuvfzJUygmGFRRct3jhFq', 'remember_token' => '',],


        ];

        foreach ($items as $item) {
            \App\User::create($item);
        }
    }
}
