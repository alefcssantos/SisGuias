<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class GuiaReferenciasSeeder extends Seeder {
    public function run() {
        $data = [
            [
                'guiaReferenciaPacienteId' => 1,
                'guiaReferenciaEstabelecimentoOrigem' => 'Hospital Central',
                'guiaReferenciaProntuarioOrigem' => '12345',
                'guiaReferenciaEspecialidade' => 'Cardiologia',
                'guiaReferenciaCid' => 'I10',
                'guiaReferenciaQuadroClinico' => 'Hipertensão arterial severa',
                'guiaReferenciaExamesRealizados' => 'Eletrocardiograma',
                'guiaReferenciaDiagnostico' => 'Hipertensão estágio 2',
                'guiaReferenciaMotivoEncaminhamento' => 'Paciente com risco cardiovascular elevado',
                'guiaReferenciaPrioridade' => 2,
                'guiaReferenciaMotivoPrioridade' => 'Histórico familiar de AVC',
                'guiaReferenciaData' => '2025-03-16',
                'guiaReferenciaStatus' => 'Triagem'
            ],
            [
                'guiaReferenciaPacienteId' => 1,
                'guiaReferenciaEstabelecimentoOrigem' => 'Clínica São Lucas',
                'guiaReferenciaProntuarioOrigem' => '67890',
                'guiaReferenciaEspecialidade' => 'Neurologia',
                'guiaReferenciaCid' => 'G40',
                'guiaReferenciaQuadroClinico' => 'Crises epilépticas recorrentes',
                'guiaReferenciaExamesRealizados' => 'Ressonância magnética',
                'guiaReferenciaDiagnostico' => 'Epilepsia',
                'guiaReferenciaMotivoEncaminhamento' => 'Paciente necessita acompanhamento especializado',
                'guiaReferenciaPrioridade' => 1,
                'guiaReferenciaMotivoPrioridade' => 'Convulsões frequentes',
                'guiaReferenciaData' => '2025-03-16',
                'guiaReferenciaStatus' => 'Triagem'
            ],
            [
                'guiaReferenciaPacienteId' => 1,
                'guiaReferenciaEstabelecimentoOrigem' => 'Posto Saúde Bairro',
                'guiaReferenciaProntuarioOrigem' => '11223',
                'guiaReferenciaEspecialidade' => 'Ortopedia',
                'guiaReferenciaCid' => 'M54',
                'guiaReferenciaQuadroClinico' => 'Dor lombar crônica',
                'guiaReferenciaExamesRealizados' => 'Raio-X da coluna',
                'guiaReferenciaDiagnostico' => 'Lombalgia crônica',
                'guiaReferenciaMotivoEncaminhamento' => 'Encaminhamento para fisioterapia',
                'guiaReferenciaPrioridade' => 3,
                'guiaReferenciaMotivoPrioridade' => 'Dor intensa e recorrente',
                'guiaReferenciaData' => '2025-03-16',
                'guiaReferenciaStatus' => 'Triagem'
            ],
            [
                'guiaReferenciaPacienteId' => 1,
                'guiaReferenciaEstabelecimentoOrigem' => 'UPA Zona Sul',
                'guiaReferenciaProntuarioOrigem' => '44556',
                'guiaReferenciaEspecialidade' => 'Endocrinologia',
                'guiaReferenciaCid' => 'E11',
                'guiaReferenciaQuadroClinico' => 'Diabetes mellitus tipo 2 descompensado',
                'guiaReferenciaExamesRealizados' => 'Hemoglobina glicada',
                'guiaReferenciaDiagnostico' => 'Diabetes descompensado',
                'guiaReferenciaMotivoEncaminhamento' => 'Avaliação para ajuste terapêutico',
                'guiaReferenciaPrioridade' => 2,
                'guiaReferenciaMotivoPrioridade' => 'Níveis elevados de glicose persistentes',
                'guiaReferenciaData' => '2025-03-16',
                'guiaReferenciaStatus' => 'Triagem'
            ],
            [
                'guiaReferenciaPacienteId' => 1,
                'guiaReferenciaEstabelecimentoOrigem' => 'Hospital Universitário',
                'guiaReferenciaProntuarioOrigem' => '77889',
                'guiaReferenciaEspecialidade' => 'Psiquiatria',
                'guiaReferenciaCid' => 'F32',
                'guiaReferenciaQuadroClinico' => 'Depressão grave',
                'guiaReferenciaExamesRealizados' => 'Avaliação psicológica',
                'guiaReferenciaDiagnostico' => 'Transtorno depressivo maior',
                'guiaReferenciaMotivoEncaminhamento' => 'Encaminhamento para tratamento especializado',
                'guiaReferenciaPrioridade' => 1,
                'guiaReferenciaMotivoPrioridade' => 'Sintomas depressivos severos e risco de suicídio',
                'guiaReferenciaData' => '2025-03-16',
                'guiaReferenciaStatus' => 'Triagem'
            ]
        ];

        // Usando o Query Builder
        $this->db->table('guiareferencias')->insertBatch($data);
    }
}
