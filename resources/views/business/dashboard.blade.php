<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <main>
        <div class="meusEstacionamentosContainer">
          <div class="cadastrar-estacionamento">
            <button><a href="{{ route('estacionamentos.create') }}">CADASTRAR</a></button>
          </div>

          @foreach ($estacionamentos as $estacionamento)
            <div class="estacionamentos">
              <div class="estacionamentoImg">
                <img src="{{ asset('storage/' . $estacionamento->imagem) }}" alt="Imagem">
              </div>
              <div class="descricaoEstacionamento">
                <div class="sobreEstacionamento">
                  <h3>{{ $estacionamento->nome }}</h3>
                  <h4>{{ $estacionamento->endereco }}</h4>
                </div>
                <div class="verMais">
                  <a href="#" class="btnVerMais">Ver Mais</a>
                </div>
              </div>
            </div>
          @endforeach
        </div>
      </main>
</x-app-layout>
