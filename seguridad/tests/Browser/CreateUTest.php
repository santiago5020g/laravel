<?php

namespace Tests\Browser;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class CreateUTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     *
     * @return void
     */
    public function testExample()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/ingreso')
                    ->type('usuario','santiago5020g@hotmail.com')
                    ->type('clave','1234')
                    ->press('input[type=submit]')
                    ->assertPathIs('/laravel/seguridad/public/usuarios')
                    ->clickLink('Crear Usuario')
                    ->assertPathIs('/laravel/seguridad/public/usuarios/create')
                    ->type('nombre','Rodrigo sa')
                    ->type('email','prueba2@hotmail.com')
                    ->type('telefono','301020')
                    ->type('clave','1234')
                    ->check('div input[name="rol[]"]','1')
                    ->press('input[type=submit]')
                    ->assertPathIs('/laravel/seguridad/public/usuarios')
                    ->assertSee('prueba1@hotmail.com');
                    
        });
    }
}
