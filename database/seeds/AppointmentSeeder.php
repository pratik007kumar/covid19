<?php

use Illuminate\Database\Seeder;

class AppointmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Appointment

        $items = [

            ['id' => 1, 'doctor_user_id' => 2,    'patient_user_id' => 7,    'title' => 'Appointment at 10:10 pm https://www.gotomeet.me/empeal Access Code: 324-135-941',    'event_start_dt' => '2020-04-12 10:10:00',     'event_end_dt' => '2020-04-12 11:10:00'],
            ['id' => 2, 'doctor_user_id' => 3,    'patient_user_id' => 8,    'title' => 'Appointment at 11:10 pm https://www.gotomeet.me/empeal Access Code: 324-135-941',    'event_start_dt' => '2020-04-15 11:10:00',     'event_end_dt' => '2020-04-15 12:10:00'],
            ['id' => 3, 'doctor_user_id' => 4,    'patient_user_id' => 9,    'title' => 'Appointment at 9:10 pm https://www.gotomeet.me/empeal Access Code: 324-135-941',    'event_start_dt' => '2020-04-18 9:10:00',     'event_end_dt' => '2020-04-18 10:10:00'],
            ['id' => 4, 'doctor_user_id' => 5,    'patient_user_id' => 10,    'title' => 'Appointment at 3:10 pm https://www.gotomeet.me/empeal Access Code: 324-135-941',    'event_start_dt' => '2020-04-21 3:10:00',     'event_end_dt' => '2020-04-21 4:10:00'],
            ['id' => 5, 'doctor_user_id' => 6,    'patient_user_id' => 11,    'title' => 'Appointment at 2:10 pm https://www.gotomeet.me/empeal Access Code: 324-135-941',    'event_start_dt' => '2020-04-25 2:10:00',     'event_end_dt' => '2020-04-25 4:10:00'],

            ['id' => 6, 'doctor_user_id' => 6,    'patient_user_id' => 7,    'title' => 'Appointment at 10:10 pm https://www.gotomeet.me/empeal Access Code: 324-135-941',    'event_start_dt' => '2020-04-12 10:10:00',     'event_end_dt' => '2020-04-12 11:10:00'],
            ['id' => 7, 'doctor_user_id' => 5,    'patient_user_id' => 8,    'title' => 'Appointment at 11:10 pm https://www.gotomeet.me/empeal Access Code: 324-135-941',    'event_start_dt' => '2020-04-15 11:10:00',     'event_end_dt' => '2020-04-15 12:10:00'],
            ['id' => 8, 'doctor_user_id' => 4,    'patient_user_id' => 10,    'title' => 'Appointment at 9:10 pm https://www.gotomeet.me/empeal Access Code: 324-135-941',    'event_start_dt' => '2020-04-18 9:10:00',     'event_end_dt' => '2020-04-18 10:10:00'],
            ['id' => 9, 'doctor_user_id' => 3,    'patient_user_id' => 9,    'title' => 'Appointment at 3:10 pm https://www.gotomeet.me/empeal Access Code: 324-135-941',    'event_start_dt' => '2020-04-21 3:10:00',     'event_end_dt' => '2020-04-21 4:10:00'],
            ['id' => 10, 'doctor_user_id' => 2,    'patient_user_id' => 11,    'title' => 'Appointment at 2:10 pm https://www.gotomeet.me/empeal Access Code: 324-135-941',    'event_start_dt' => '2020-04-25 2:10:00',     'event_end_dt' => '2020-04-25 4:10:00'],

            ['id' => 11, 'doctor_user_id' => 3,    'patient_user_id' => 11,    'title' => 'Appointment at 10:10 pm https://www.gotomeet.me/empeal Access Code: 324-135-941',    'event_start_dt' => '2020-04-12 10:10:00',     'event_end_dt' => '2020-04-12 11:10:00'],
            ['id' => 12, 'doctor_user_id' => 4,    'patient_user_id' => 10,    'title' => 'Appointment at 11:10 pm https://www.gotomeet.me/empeal Access Code: 324-135-941',    'event_start_dt' => '2020-04-15 11:10:00',     'event_end_dt' => '2020-04-15 12:10:00'],
            ['id' => 13, 'doctor_user_id' => 2,    'patient_user_id' => 9,    'title' => 'Appointment at 9:10 pm https://www.gotomeet.me/empeal Access Code: 324-135-941',    'event_start_dt' => '2020-04-18 9:10:00',     'event_end_dt' => '2020-04-18 10:10:00'],
            ['id' => 14, 'doctor_user_id' => 5,    'patient_user_id' => 8,    'title' => 'Appointment at 3:10 pm https://www.gotomeet.me/empeal Access Code: 324-135-941',    'event_start_dt' => '2020-04-21 3:10:00',     'event_end_dt' => '2020-04-21 4:10:00'],
            ['id' => 15, 'doctor_user_id' => 6,    'patient_user_id' => 7,    'title' => 'Appointment at 2:10 pm https://www.gotomeet.me/empeal Access Code: 324-135-941',    'event_start_dt' => '2020-04-25 2:10:00',     'event_end_dt' => '2020-04-25 4:10:00'],

        ];

        foreach ($items as $item) {
            \App\Appointment::create($item);
        }
    }
}
