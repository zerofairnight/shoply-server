<?php

use App\Models\User;
use App\Models\Shop;
use App\Models\Article;
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
        ]);

        $shop = factory(Shop::class)->create(['creator_id' => $user->id]);
        $shop->articles()->saveMany(factory(Article::class, 50)->create(['shop_id' => $shop->id]));

        $user->shops()->attach($shop); // note that the shop can have a different owner

        factory(User::class, 50)->create();
    }
}
