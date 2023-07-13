<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Cadastro Licenças') }}
        </h2>
    </x-slot>

    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.7.14/css/bootstrap-datetimepicker.min.css">


    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">

                <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                    <div class="max-w-xl">
                        <div style="margin: 0 0 0 20px; flex-basis: 102px;">
                            <form action="{{ route('cadastro') }}" method="POST">
                                @csrf
                            <div class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 ">

                                {{-- Região administrativa --}}
                                <select
                                    class="form-control border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md "
                                    name="id_ra" id="id_ra">
                                    <option>RA</option>
                                    @foreach ($regiao as $regiao)
                                        <option value="{{ $regiao->id }}">{{ $regiao->nome }}</option>
                                    @endforeach
                                </select>

                                {{-- Tipo de Empreendimento --}}
                                <select
                                    class="form-control border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md "
                                    name="id_empreendimento" id="id_empreendimento">
                                    <option>Empreendimento</option>
                                    @foreach ($tipo_empre as $empre)
                                        <option value="{{ $empre->id }}">{{ $empre->tipo }}</option>
                                    @endforeach
                                </select>

                                {{-- Tipo --}}
                                <select
                                    class="form-control border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md "
                                    name="id_tipo" id="id_tipo">
                                    <option>Tipo</option>
                                    @foreach ($tipo as $tipo)
                                        <option value="{{ $tipo->id }}">{{ $tipo->sigla }} - {{ $tipo->descricao }}
                                        </option>
                                    @endforeach
                                </select>

                                {{-- Situação --}}
                                <select
                                    class="form-control border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md "
                                    name="id_situacao" id="id_situacao">
                                    <option>Situação</option>
                                    @foreach ($situacao as $situacao)
                                        <option value="{{ $situacao->id }}">{{ $situacao->situacao }}</option>
                                    @endforeach
                                </select>

                                {{-- Bacia Hidrográfica --}}
                                {{-- <select
                                    class="form-control border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md "
                                    name="id_bacia" id="id_bacia">
                                    <option>Bacia</option>
                                    @foreach ($bacia as $bacia)
                                        <option value="{{ $bacia->id }}">{{ $bacia->bacia }}</option>
                                    @endforeach
                                </select> --}}

                                {{-- Latitude --}}
                                <x-input-label :value="__('Latitude')" />
                                <x-text-input id="latitude" name="latitude" type="number" class="mt-1 block " />

                                {{-- longitude --}}
                                <x-input-label :value="__('Longitude')" />
                                <x-text-input id="longitude" name="longitude" type="number" class="mt-1 block" />

                                {{-- Empreendimento --}}
                                <x-input-label :value="__('Empreendimento')" />
                                <div class="form-floating ">
                                    <textarea class="form-control border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md w-full"
                                        placeholder="Descreva o empreendimento" id="empreendimento" name="empreendimento"></textarea>
                                </div>
                            </div>

                            {{-- Número do processo --}}
                            <x-input-label :value="__('Número do processo')" />
                            <x-text-input id="num_processo" name="num_processo" type="text" class="mt-1 block" />

                            {{-- Documento SEI --}}
                            <x-input-label :value="__('Documento SEI')" />
                            <x-text-input id="doc_sei" name="doc_sei" type="text" class="mt-1 block" />

                            {{-- Número --}}
                            <x-input-label :value="__('Número')" />
                            <x-text-input id="numero" name="numero" type="number" class="mt-1 block" />

                            {{-- Data de concessão --}}
                            <x-input-label :value="__('Data de concessão')" />
                            <div id="date-picker-example" class="md-form md-outline input-with-post-icon datepicker"
                                inline="true">
                                <input placeholder="Select date" type="date" id="dataconcessao" name="dataconcessao"
                                    class="form-control border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md">
                                <i class="fas fa-calendar input-prefix"></i>
                            </div>
                            
                            {{-- Validade --}}
                            <x-input-label :value="__('Validade')" />
                            {{-- <div id="date-picker-example" class="md-form md-outline input-with-post-icon datepicker"
                                inline="true">
                                <input placeholder="Select date" type="date" id="data_vencimento" name="data_vencimento"
                                    class="form-control border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md">
                                <i class="fas fa-calendar input-prefix"></i>
                            </div> --}}
                            <x-text-input id="validade" name="validade" type="number" class="mt-1 block" />

                            {{-- Vigência --}}
                            <x-input-label :value="__('Vigência')" />
                            <select
                                class="form-control border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md "
                                name="vigencia" id="vigencia">
                                <option value="1">Vigente</option>
                                <option value="0">Não vigente</option>

                            </select>

                            {{-- Observação --}}
                            <x-input-label :value="__('Observação')" />
                            <div class="form-floating ">
                                <textarea class="form-control border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md w-full"
                                    placeholder="Observação" id="observacao" name="observacao"></textarea>
                            </div>

                            {{-- Interessado --}}
                            <x-input-label :value="__('Interessado')" />
                            <select
                                class="form-control border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md "
                                name="interessado" id="interessado">
                                <option value="{{ 'NOVACAP' }}">Novacap</option>

                            </select>


                            <x-primary-button>{{ __('Salvar') }}</x-primary-button>
                        </div>
                    </form>

                    </div>
                </div>

                {{-- <div class="form-container">
                    <form>
                      <div class="form-row">
                        <label for="numero">Número:</label>
                        <input type="text" id="numero" name="numero" required>
                  
                        <label for="contrato" style="margin: 0 0 0 20px; flex-basis: 102px;">Contrato:</label>
                        <input type="text" id="contrato" name="contrato" required>
                      </div>
                  
                      <div class="form-row">
                        <label for="documento">Documento:</label>
                        <input type="text" id="documento" name="documento" required>
                      </div>
                  
                      <div class="form-row">
                        <label for="recolhimento">Tipo de recolhimento:</label>
                        <select id="recolhimento" name="recolhimento" required>
                          <option value="">Selecione</option>
                          <option value="opcao1">Opção 1</option>
                          <option value="opcao2">Opção 2</option>
                          <option value="opcao3">Opção 3</option>
                        </select>
                      </div>
                  
                      <div class="form-row">
                        <label for="agencia">Agência:</label>
                        <select id="agencia" name="agencia" required>
                          <option value="">Selecione</option>
                          <option value="agencia1">Agência 1</option>
                          <option value="agencia2">Agência 2</option>
                          <option value="agencia3">Agência 3</option>
                        </select>
                      </div>
                  
                      <div class="form-row">
                        <label for="baixa">Processos de baixa:</label>
                        <input type="text" id="baixa" name="baixa" required>
                     
                        <label for="cpf_cnpj" style="margin: 0 0 0 20px; flex-basis: 102px;">CPF/CNPJ:</label>
                        <input type="text" id="cpf_cnpj" name="cpf_cnpj" required>
                      </div>
                  
                      <div class="form-row">
                        <label for="gr">Data do GR:</label>
                
                        <input type="date" id="gr" name="gr" required>
                        <span>a</span>
                        <input type="date" id="gr" name="gr" required>
                
                      </div>
                  
                      <div class="form-row">
                        <label for="validade">Data de validade:</label>
                        <input type="date" id="validade" name="validade" required>
                        <span>a</span>
                        <input type="date" id="validade" name="validade" required>
                      </div>
                  
                      <div class="form-row">
                        <label for="data_baixa">Data da baixa:</label>
                        <input type="date" id="data_baixa" name="data_baixa" required>
                        <span>a</span>
                        <input type="date" id="data_baixa" name="data_baixa" required>
                      </div>
                  
                      <div class="form-row">
                        <label for="tipo_documento">Tipo do Documento:</label>
                        <select id="tipo_documento" name="tipo_documento" required>
                          <option value="">Selecione</option>
                          <option value="tipo1">Tipo 1</option>
                          <option value="tipo2">Tipo 2</option>
                          <option value="tipo3">Tipo 3</option>
                        </select>
                      </div>
                  
                      <div class="form-row">
                        <label for="numero_nl">Número da NL:</label>
                        <input type="text" id="numero_nl" name="numero_nl" required>
                      </div>
                  
                      <div class="form-row">
                        <label for="tipo_consulta">Tipo da Consulta:</label>
                        <select id="tipo_consulta" name="tipo_consulta" required>
                          <option value="">Selecione</option>
                          <option value="consulta1">Consulta 1</option>
                          <option value="consulta2">Consulta 2</option>
                          <option value="consulta3">Consulta 3</option>
                        </select>
                      </div>
                  
                      <div class="form-row">
                        <input type="submit" value="Enviar">
                      </div>
                    </form>
                  </div> --}}


            </div>
        </div>
    </div>
</x-app-layout>
