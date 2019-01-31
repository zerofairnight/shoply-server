<?php

use App\Models\User;
use App\Models\Shop;
use Illuminate\Database\Seeder;

class LocalDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // create a test user
        factory(User::class)->create([
            'name' => 'Test User',
            'email' => 'a@a.com'
        ]);

        factory(User::class, 50)->create();
    }
}
