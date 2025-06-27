@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Detalhes do Estacionamento</h2>
    <p><strong>Nome:</strong> Polo Shopping</p>
    <p><strong>Endereço:</strong> Av. Santos Dumont, 1000</p>
    <p><strong>Vagas disponíveis:</strong> 120</p>
    <p><strong>Horário de funcionamento:</strong> 08h às 22h</p>
    <a href="{{ route('dashboard') }}" class="btn btn-secondary">Voltar</a>
</div>
@endsection
