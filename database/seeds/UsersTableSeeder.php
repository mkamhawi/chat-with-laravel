<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $count = App\User::all()->count();
        for($i = $count; $i < $count + 10; $i++) {
            factory(App\User::class)->create([
                'email' => "user{$i}@example.com"
            ]);
        }
    }
}
