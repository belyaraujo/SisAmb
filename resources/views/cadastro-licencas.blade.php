<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Cadastro Licenças') }}
        </h2>
    </x-slot>

    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.7.14/css/bootstrap-datetimepicker.min.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
 

        <div class="py-12">
          <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
              <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                  
                     
                <form action="{{ route('cadastro') }}" method="POST" class="row g-3">
                  @csrf
                          <div class="col-md-4">
                              <label for="inputEmail4" class="form-label">Número do processo</label>
                              <input type="text" class="form-control" id="num_processo" name="num_processo" value="">
                          </div>
  
                            <div class="col-md-4">
                              <label for="inputEmail4" class="form-label">Documento SEI</label>
                              <input type="text" class="form-control" id="doc_sei" name="doc_sei" value="">
                            </div>
  
                            <div class="col-md-2">
                              <label for="inputEmail4" class="form-label">Número</label>
                              <input type="number" class="form-control" id="numero" name="numero" value="">
                            </div>
  
                            <div class="col-md-2">
                              <label for="inputZip" class="form-label">Tipo</label>
                              <select
                                    class="form-control border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md "
                                    name="id_tipo" id="id_tipo">
                                    <option>Tipo</option>
                                    @foreach ($tipo as $tipo)
                                        <option value="{{ $tipo->id }}">{{ $tipo->sigla }} - {{ $tipo->descricao }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                          <div class="col-md-4">
                            <label for="inputEmail4" class="form-label">Região Administrativa</label>
                            <select
                                    class="form-control border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md"
                                    name="id_ra" id="id_ra">
                                    <option>RA</option>
                                    @foreach ($regiao as $regiao)
                                        <option value="{{ $regiao->id }}">{{ $regiao->nome }}</option>
                                    @endforeach
                                </select>
                          </div>
                          <div class="col-md-4">
                              <label for="inputEmail4" class="form-label">Tipo de empreendimento</label>
                              <select
                                    class="form-control border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md "
                                    name="id_empreendimento" id="id_empreendimento">
                                    <option>Empreendimento</option>
                                    @foreach ($tipo_empre as $empre)
                                        <option value="{{ $empre->id }}">{{ $empre->tipo }}</option>
                                    @endforeach
                                </select>
                          </div>

                          <div class="col-md-4">
                            <label for="inputEmail4" class="form-label">Situação</label>
                            <select
                            class="form-control border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md "
                            name="id_situacao" id="id_situacao">
                            <option>Situação</option>
                            @foreach ($situacao as $situacao)
                                <option value="{{ $situacao->id }}">{{ $situacao->situacao }}</option>
                            @endforeach
                        </select>
                        </div>
  
                          <div class="col-12">
                              <label for="exampleFormControlTextarea1" class="form-label">Empreendimento</label>
                              <div class="form-floating ">
                                <textarea class="form-control border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md w-full"
                                     id="empreendimento" name="empreendimento"></textarea>
                            </div>
                          </div>
  
                          <div class="col-md-6">
                              <label for="inputCity" class="form-label">Data de Concessão</label>
                              <div id="date-picker-example" class="md-form md-outline input-with-post-icon datepicker"
                                inline="true">
                                <input placeholder="Select date" type="date" id="dataconcessao" name="dataconcessao"
                                    class="form-control border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md">
                                <i class="fas fa-calendar input-prefix"></i>
                            </div>
                            </div>
                            <div class="col-md-6">
                                <label for="inputCity" class="form-label">Validade</label>
                                <input id="validade" name="validade" type="number" class="form-control"/>
                              </div>

                              <div class="col-md-6">
                                <label for="inputCity" class="form-label">Data de vencimento </label>
                                <div id="date-picker-example" class="md-form md-outline input-with-post-icon datepicker"
                                  inline="true">
                                  <input placeholder="Select date" type="date" id="datavencimento" name="datavencimento"
                                      class="form-control border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md">
                                  <i class="fas fa-calendar input-prefix"></i>
                              </div>

                              <div class="col-md-6">
                                  <label for="inputCity" class="form-label">Vigência</label>
                                  <select
                            class="form-control border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md "
                            name="id_vigencia" id="id_vigencia">
                            
                            @foreach ($vigencia as $vigencia)
                                <option value="{{ $vigencia->id }}">{{ $vigencia->vigencia }}</option>
                            @endforeach
                        </select>
                                </div>
                                <div class="col-md-6">
                                  <label for="inputCity" class="form-label">Interessado</label>
                                  <select
                                class="form-control border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md "
                                name="interessado" id="interessado">
                                <option value="{{ 'NOVACAP' }}">Novacap</option>

                            </select>
                                </div>
  
                          <div class="col-12">
                              <label for="exampleFormControlTextarea1" class="form-label">Observação</label>
                              <div class="form-floating ">
                                <textarea class="form-control border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md w-full"
                                    placeholder="Observação" id="observacao" name="observacao"></textarea>
                            </div>
                            <x-primary-button>{{ __('Salvar') }}</x-primary-button>
                          </div>
                          
                        </form>
                        
                  
              </div>

          </div>
      </div>
</x-app-layout>
