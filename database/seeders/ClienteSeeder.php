<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('clientes')->insert([
            ['nome' => 'Danilo Vieira',   'cpf' => '325.458.741-25', 'data_nascimento' => '1992-05-08', 'sexo' => 'Masculino', 'cidade' => 'São Paulo', 'estado' => 'SP'],
            ['nome' => 'Fabio Martins',   'cpf' => '452.741.523-13', 'data_nascimento' => '1995-04-15', 'sexo' => 'Masculino', 'cidade' => 'Belo Horizonte', 'estado' => 'MG'],
            ['nome' => 'Beatriz Vicente', 'cpf' => '685.852.745-01', 'data_nascimento' => '2001-09-20', 'sexo' => 'Feminino', 'cidade' => 'Espírito Santo', 'estado' => 'ES'],
            ['nome' => 'Caio Castro',     'cpf' => '112.258.632-05', 'data_nascimento' => '1987-06-01', 'sexo' => 'Masculino', 'cidade' => 'Rio de Janeiro', 'estado' => 'RJ'],
            ['nome' => 'Bruna Ferraz',    'cpf' => '325.458.741-25', 'data_nascimento' => '2000-07-13', 'sexo' => 'Feminino', 'cidade' => 'Salvador', 'estado' => 'BA'],
            
        ]);
    }
}
