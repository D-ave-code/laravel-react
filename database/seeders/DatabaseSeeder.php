<?php

namespace Database\Seeders;

use App\Models\Marca;
use App\Models\Producto;
use App\Models\TipoPersona;
use App\Models\TipoProducto;
use App\Models\User;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory()->create([
            'name' => 'Administrador',
            'email' => 'admin@admin.com',
        ]);
        User::factory(10)->create();
        TipoPersona::factory()->create([
            'nombre' => 'Hombre',           
        ]);
        TipoPersona::factory()->create([
            'nombre' => 'Mujer',           
        ]);
        TipoPersona::factory()->create([
            'nombre' => 'niño',           
        ]);
        TipoPersona::factory()->create([
            'nombre' => 'niña',           
        ]);
        TipoProducto::factory()->create([
            'nombre_tipo' => 'Botas',           
        ]);
        TipoProducto::factory()->create([
            'nombre_tipo' => 'Botin',           
        ]);
        TipoProducto::factory()->create([
            'nombre_tipo' => 'Pantufla',           
        ]);
        TipoProducto::factory()->create([
            'nombre_tipo' => 'Zueco',           
        ]);
        TipoProducto::factory()->create([
            'nombre_tipo' => 'Tacones',           
        ]);
        TipoProducto::factory()->create([
            'nombre_tipo' => 'Chancla',           
        ]);

        Marca::factory()->create([
            'nombre' => 'Adidas',           
        ]);
        Marca::factory()->create([
            'nombre' => 'Nike',           
        ]);
        Marca::factory()->create([
            'nombre' => 'Fila',           
        ]);
        Marca::factory()->create([
            'nombre' => 'Converse',           
        ]);
        Marca::factory()->create([
            'nombre' => 'Reebok',           
        ]);
        Producto::factory(100)->create();
        
    }
}
