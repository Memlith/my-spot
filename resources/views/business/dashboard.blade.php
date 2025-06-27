@extends('layouts.app')

@section('content')
<div class="container">
    <div class="meusEstacionamentosContainer">
        <!-- Botão cadastrar removido -->

        <!-- Estacionamento fictício -->
        <div class="estacionamentos">
            <div class="estacionamentoImg" style="width: 130px; height: 130px; overflow: hidden; border-radius: 10px;">
                <img src="{{ asset('storage/estacionamentos/foto-teste.jpg') }}" alt="Imagem do Estacionamento" style="width: 100%; height: 100%; object-fit: cover;">
            </div>
            <div class="descricaoEstacionamento">
                <div class="sobreEstacionamento">
                    <h3>Polo Shopping</h3>
                    <h4>Av. Santos Dumont, 1000</h4>
                </div>
                <div class="verMais">
                    <a href="{{ route('estacionamento.detalhes') }}" class="btn btn-primary mt-2">Ver Mais</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
