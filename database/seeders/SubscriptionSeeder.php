<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Subscription;

class SubscriptionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Subscription::create([
            'name' => 'Básico',
            'description' => 'Acesso ao mapa de estacionamentos próximos, Cadastro de veículo e perfil de usuário, Visualização de empresas parceiras, Interface intuitiva e acessível',
            'price' => 0.00,
        ]);

        Subscription::create([
            'name' => 'Intermediário',
            'description' => 'Reserva antecipada de vagas comuns, Pagamentos pelo app com histórico, Vagas preferenciais com prioridade (gestantes, PCD, idosos), Notificações em tempo real sobre disponibilidade, Suporte dedicado via app',
            'price' => 19.99,
        ]);

        Subscription::create([
            'name' => 'Premium',
            'description' => 'Prioridade máxima em reservas de qualquer tipo de vaga, Alertas personalizados com base em histórico de uso e localização, Descontos exclusivos com empresas parceiras, Relatórios detalhados de uso e gastos com estacionamento, Autenticação biométrica e segurança avançada de dados, Acesso antecipado a novas funcionalidades',
            'price' => 49.99,
        ]);
    }
}


