<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class PacienteSeeder extends Seeder {
    public function run() {
        $faker = \Faker\Factory::create('pt_BR');

        for ($i = 0; $i < 10; $i++) {
            $data = [
                'pacienteCdr'            => $faker->numberBetween(100000, 999999),
                'pacienteNome'           => $faker->name,
                'pacienteDataNascimento' => $faker->date('Y-m-d', '2005-01-01'),
                'pacientePeso'           => $faker->randomFloat(1, 40, 120),
                'pacienteAltura'         => $faker->randomFloat(2, 1.4, 2.0),
            ];

            $this->db->table('pacientes')->insert($data);
        }
    }
}
