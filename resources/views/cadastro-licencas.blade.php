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
                                <select
                                    class="form-control border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md "
                                    name="id_bacia" id="id_bacia">
                                    <option>Bacia</option>
                                    @foreach ($bacia as $bacia)
                                        <option value="{{ $bacia->id }}">{{ $bacia->bacia }}</option>
                                    @endforeach
                                </select>

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
                            {{-- <x-input-label :value="__('Número do processo')" />
                            <x-text-input id="processo" name="processo" type="text" class="mt-1 block" /> --}}

                            {{-- Documento SEI --}}
                            <x-input-label :value="__('Documento SEI')" />
                            <x-text-input id="doc_sei" name="doc_sei" type="text" class="mt-1 block" />

                            {{-- Número --}}
                            <x-input-label :value="__('Número')" />
                            <x-text-input id="num_processo" name="num_processo" type="number" class="mt-1 block" />

                            {{-- Data de concessão --}}
                            <x-input-label :value="__('Data de concessão')" />
                            <div id="date-picker-example" class="md-form md-outline input-with-post-icon datepicker"
                                inline="true">
                                <input placeholder="Select date" type="date" id="dataconcessao" name="dataconcessao"
                                    class="form-control border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md">
                                <i class="fas fa-calendar input-prefix"></i>
                            </div>
                            
                            {{-- Data de vencimento --}}
                            <x-input-label :value="__('Data de vencimento')" />
                            <div id="date-picker-example" class="md-form md-outline input-with-post-icon datepicker"
                                inline="true">
                                <input placeholder="Select date" type="date" id="data_vencimento" name="data_vencimento"
                                    class="form-control border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md">
                                <i class="fas fa-calendar input-prefix"></i>
                            </div>


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

            </div>
        </div>
    </div>
</x-app-layout>
