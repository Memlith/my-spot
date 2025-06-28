<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Establishment;

class EstablishmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Establishment::create([
            'name' => 'Shopping Center Norte',
            'description' => 'Vasto complexo de lojas e restaurantes com cinema.',
            'latitude' => -23.5219,
            'longitude' => -46.6245,
        ]);

        Establishment::create([
            'name' => 'Parque Ibirapuera',
            'description' => 'Grande parque urbano com lagos, museus e áreas de lazer.',
            'latitude' => -23.5883,
            'longitude' => -46.6588,
        ]);

        Establishment::create([
            'name' => 'Aeroporto de Congonhas',
            'description' => 'Aeroporto doméstico na zona sul de São Paulo.',
            'latitude' => -23.6261,
            'longitude' => -46.6564,
        ]);
    }
}