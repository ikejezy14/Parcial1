<?php
use App\Venta;
use App\Producto;
use Illuminate\Database\Seeder;

class ProductoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //$productos=factory(App\Producto::class,4)->create();

        $users=factory(App\User::class,4)->create()
        ->each(function($user){
            $venta=factory(App\Venta::class)->make();
            $user->ventas2()->save($venta);
            $venta->productoss()->save(factory(App\Producto::class)->make());
        });
    }
}
