<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\User::class, 5)->create()->each(function(App\User $user){
            factory(App\Message::class)
                ->times(15)
                ->create([
                    'user_id' => $user->id,
                ]);
        });
    }
}
