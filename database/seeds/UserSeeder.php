<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users=factory(App\User::class,4)->create();
        //->each(function($user){
           // $user->ventas2()->save(factory(App\Venta::class)->make());
       // });
    }
}
