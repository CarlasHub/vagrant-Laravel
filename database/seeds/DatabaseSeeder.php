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
        // $this->call(UsersTableSeeder::class);
        //Model::unguard();

          $this->call(UsersTableSeeder::class);
          $this->call(PostsTableSeeder::class);


        /*factory(App\Models\User::class, 10)->create()->each(function($u) {
        $u->issues()->save(factory(App\Issues::class)->make());
         });

        factory(App\Models\Post::class, 10)->create()->each(function($u) {
        $u->issues()->save(factory(App\Issues::class)->make());
         });*/

          //Model::reguard();

    }
}
