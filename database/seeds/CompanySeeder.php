<?php

use Illuminate\Database\Seeder;

class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Company::class, 5)->create();
        factory(App\User::class, 1)->create();
        factory(App\Position::class, 5)->create();
        factory(App\Profile::class, 200)->create();
    }
/*

    factory(PlatziPHP\User::class, 10)->create()->each(function ($user) {
            $post = factory(PlatziPHP\Post::class)->make();
            $user->posts()->save($post);
        });
*/
}
