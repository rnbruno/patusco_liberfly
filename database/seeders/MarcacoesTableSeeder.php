<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MarcacoesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('marcacoes')->insert([
            [
                'animals_user_id' => 11, // Substitua por um ID válido de 'animals_user'
                'medical_id' => 1, // Substitua por um ID válido de 'medical'
                'marcacao_date' => '2024-08-02 09:00:00',
                'reason' => 'Check-up anual',
                'notes' => 'Exame geral e vacinação.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'animals_user_id' => 12, // Substitua por um ID válido de 'animals_user'
                'medical_id' => 2, // Substitua por um ID válido de 'medical'
                'marcacao_date' => '2024-08-03 10:30:00',
                'reason' => 'Vacinação',
                'notes' => 'Vacinação contra raiva.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'animals_user_id' => 11, // Substitua por um ID válido de 'animals_user'
                'medical_id' => 3, // Substitua por um ID válido de 'medical'
                'marcacao_date' => '2024-08-04 11:00:00',
                'reason' => 'Consulta de emergência',
                'notes' => 'Dificuldade para respirar.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'animals_user_id' => 13, // Substitua por um ID válido de 'animals_user'
                'medical_id' => 4, // Substitua por um ID válido de 'medical'
                'marcacao_date' => '2024-08-05 12:00:00',
                'reason' => 'Exame de sangue',
                'notes' => 'Amostra de sangue para análise.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'animals_user_id' => 11, // Substitua por um ID válido de 'animals_user'
                'medical_id' => 5, // Substitua por um ID válido de 'medical'
                'marcacao_date' => '2024-08-06 14:00:00',
                'reason' => 'Consulta de rotina',
                'notes' => 'Avaliação de saúde geral.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'animals_user_id' => 11, // Substitua por um ID válido de 'animals_user'
                'medical_id' => 1, // Substitua por um ID válido de 'medical'
                'marcacao_date' => '2024-08-02 09:00:00',
                'reason' => 'Check-up anual',
                'notes' => 'Exame geral e vacinação.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'animals_user_id' => 12, // Substitua por um ID válido de 'animals_user'
                'medical_id' => 2, // Substitua por um ID válido de 'medical'
                'marcacao_date' => '2024-08-03 10:30:00',
                'reason' => 'Vacinação',
                'notes' => 'Vacinação contra raiva.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'animals_user_id' => 13,
                'medical_id' => 3,
                'marcacao_date' => '2024-08-04 14:00:00',
                'reason' => 'Consulta de emergência',
                'notes' => 'Febre e falta de apetite.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'animals_user_id' => 14,
                'medical_id' => 1,
                'marcacao_date' => '2024-08-05 11:00:00',
                'reason' => 'Exame de sangue',
                'notes' => 'Coleta de sangue para exames laboratoriais.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'animals_user_id' => 15,
                'medical_id' => 4,
                'marcacao_date' => '2024-08-06 13:30:00',
                'reason' => 'Consulta dermatológica',
                'notes' => 'Alergia na pele.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'animals_user_id' => 16,
                'medical_id' => 5,
                'marcacao_date' => '2024-08-07 16:00:00',
                'reason' => 'Cirurgia de castração',
                'notes' => 'Procedimento cirúrgico agendado.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'animals_user_id' => 17,
                'medical_id' => 2,
                'marcacao_date' => '2024-08-08 09:30:00',
                'reason' => 'Vacinação',
                'notes' => 'Vacinação anual contra leptospirose.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'animals_user_id' => 18,
                'medical_id' => 3,
                'marcacao_date' => '2024-08-09 15:00:00',
                'reason' => 'Consulta oftalmológica',
                'notes' => 'Exame de vista e tratamento para conjuntivite.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'animals_user_id' => 19,
                'medical_id' => 1,
                'marcacao_date' => '2024-08-10 10:00:00',
                'reason' => 'Check-up anual',
                'notes' => 'Exame geral e atualização de vacinas.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'animals_user_id' => 20,
                'medical_id' => 4,
                'marcacao_date' => '2024-08-11 12:30:00',
                'reason' => 'Consulta ortopédica',
                'notes' => 'Dor nas articulações.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'animals_user_id' => 21,
                'medical_id' => 5,
                'marcacao_date' => '2024-08-12 14:00:00',
                'reason' => 'Cirurgia de castração',
                'notes' => 'Procedimento cirúrgico agendado.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'animals_user_id' => 22,
                'medical_id' => 2,
                'marcacao_date' => '2024-08-13 11:00:00',
                'reason' => 'Vacinação',
                'notes' => 'Vacinação anual contra hepatite.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'animals_user_id' => 23,
                'medical_id' => 3,
                'marcacao_date' => '2024-08-14 09:00:00',
                'reason' => 'Consulta de emergência',
                'notes' => 'Vômito e diarreia.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'animals_user_id' => 24,
                'medical_id' => 1,
                'marcacao_date' => '2024-08-15 13:30:00',
                'reason' => 'Exame de sangue',
                'notes' => 'Coleta de sangue para exames de rotina.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'animals_user_id' => 25,
                'medical_id' => 4,
                'marcacao_date' => '2024-08-16 16:00:00',
                'reason' => 'Consulta dermatológica',
                'notes' => 'Tratamento para dermatite.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'animals_user_id' => 26,
                'medical_id' => 5,
                'marcacao_date' => '2024-08-17 09:30:00',
                'reason' => 'Cirurgia de castração',
                'notes' => 'Procedimento cirúrgico agendado.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'animals_user_id' => 27,
                'medical_id' => 2,
                'marcacao_date' => '2024-08-18 15:00:00',
                'reason' => 'Vacinação',
                'notes' => 'Vacinação anual contra parvovirose.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'animals_user_id' => 22,
                'medical_id' => 3,
                'marcacao_date' => '2024-08-19 10:00:00',
                'reason' => 'Consulta oftalmológica',
                'notes' => 'Tratamento para glaucoma.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'animals_user_id' => 25,
                'medical_id' => 1,
                'marcacao_date' => '2024-08-20 12:30:00',
                'reason' => 'Check-up anual',
                'notes' => 'Exame geral e atualização de vacinas.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'animals_user_id' => 21,
                'medical_id' => 4,
                'marcacao_date' => '2024-08-21 14:00:00',
                'reason' => 'Consulta ortopédica',
                'notes' => 'Avaliação de displasia coxofemoral.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
