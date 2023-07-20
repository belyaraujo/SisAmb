<x-app-layout>
  @foreach ($licencas as $licencas)
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Adicionar condicionante') }}
        </h2>
    </x-slot>

    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.7.14/css/bootstrap-datetimepicker.min.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
 

        <div class="py-12">
          <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
              <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                  
                     
                <form action="{{ url('cadastro-condicionantes/' . $licencas->id) }}" method="POST" class="row g-3">
                  @csrf

                  <input type="text" class="form-control" id="id_licenca" name="id_licenca" value="{{ $licencas->id }}">
                  @endforeach
                  <div class="col-12">
                    <label for="exampleFormControlTextarea1" class="form-label">Condicionante</label>
                    <div class="form-floating ">
                      <textarea class="form-control border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md w-full"
                           id="condicionante" name="condicionante"></textarea>
                  </div>
                </div>

                <div class="col-md-6">
                    <label for="inputCity" class="form-label">Prazo da condicionante</label>
                    <div id="date-picker-example" class="md-form md-outline input-with-post-icon datepicker"
                      inline="true">
                      <input placeholder="Select date" type="date" id="prazo_condicionante" name="prazo_condicionante"
                          class="form-control border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md">
                      <i class="fas fa-calendar input-prefix"></i>
                  </div>
                  </div>
                  <div class="col-md-4">
                    <br>
                  <x-primary-button>{{ __('Salvar') }}</x-primary-button>
                </div>
                 </form>
                        
                  
              </div>

          </div>
      </div>
      
</x-app-layout>
