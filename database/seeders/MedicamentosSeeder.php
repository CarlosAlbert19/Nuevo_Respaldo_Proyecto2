<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Medicamento;

class MedicamentosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Medicamento::create(['nombre' => 'Paracetamol', 'tipo' => 'Analgesico']);
        Medicamento::create(['nombre' => 'Omeprazol', 'tipo' => 'Antiacidos']);

        Medicamento::factory(10)->create();
    }
}
