<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class GuiaReferenciasSeeder extends Seeder {
    public function run() {
        $faker = \Faker\Factory::create('pt_BR');

        $pacienteIds = range(1, 10);

        for ($i = 0; $i < 20; $i++) {
            $prioridade = $faker->numberBetween(1, 3);

            $data = [
                'guiaReferenciaPacienteId'           => $faker->randomElement($pacienteIds),
                'guiaReferenciaEstabelecimentoOrigem'=> $faker->company,
                'guiaReferenciaProntuarioOrigem'     => $faker->numerify('PR###'),
                'guiaReferenciaEspecialidade'        => $faker->randomElement(['Cardiologia', 'Ortopedia', 'Neurologia', 'Dermatologia']),
                'guiaReferenciaCid'                  => $faker->bothify('A##'),
                'guiaReferenciaQuadroClinico'        => $faker->sentence(6),
                'guiaReferenciaExamesRealizados'     => $faker->sentence(5),
                'guiaReferenciaDiagnostico'          => $faker->sentence(4),
                'guiaReferenciaMotivoEncaminhamento' => $faker->sentence(5),
                'guiaReferenciaPrioridade'           => $prioridade,
                'guiaReferenciaMotivoPrioridade'     => $prioridade === 1 ? 'Não se aplica' : $faker->sentence(4),
                'guiaReferenciaData'                 => $faker->dateTimeBetween('-30 days', 'now')->format('Y-m-d'),
                'guiaReferenciaStatus'               => 'Triagem',
            ];

            $this->db->table('guiareferencias')->insert($data);
        }
    }
}
