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
        $user = factory(User::class)->create([
            'name' => 'Test User',
            'email' => 'a@a.com'
        ])->shops()->attach(factory(Shop::class)->create()); // note that the shop can have a different owner

        factory(User::class, 50)->create();
    }
}
