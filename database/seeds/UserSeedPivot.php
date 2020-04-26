<?php

use Illuminate\Database\Seeder;

class UserSeedPivot extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items = [

            1 => ['role' => [1],],

            2 => ['role' => [2],],
            3 => ['role' => [2],],
            4 => ['role' => [2],],
            5 => ['role' => [2],],
            6 => ['role' => [2],],

            7 => ['role' => [3],],
            8 => ['role' => [3],],
            9 => ['role' => [3],],
            10 => ['role' => [3],],
            11 => ['role' => [3],],

        ];

        foreach ($items as $id => $item) {
            $user = \App\User::find($id);

            foreach ($item as $key => $ids) {
                $user->{$key}()->sync($ids);
            }
        }
    }
}
