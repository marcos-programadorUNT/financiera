<?php

use Illuminate\Database\Seeder;
use App\Cliente;

class ClienteTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Cliente::create(['idCliente' => '1','dniCliente' => '10000000','nombreCliente' => 'Gustavo Piminchumo','direccionCasaCliente' => 'Huanchaquito','contraseñaCliente' => 'crackenbd']);
    }
}
