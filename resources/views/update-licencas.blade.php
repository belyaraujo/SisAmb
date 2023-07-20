<x-app-layout>
    @foreach ($licencas as $licencas)
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Editar Licença - ') . $licencas->num_processo }}

            </h2>
        </x-slot>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">


        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
                <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">




                    <form class="row g-3" method="POST" action="{{ url('licenca-update/' . $licencas->id) }}">
                        @csrf
                        <input type="text" class="form-control" id="inputEmail4" value="{{ $licencas->id }}">
                        {{--Número do processo--}}
                        <div class="col-md-4">
                            <label for="inputEmail4" class="form-label">Número do processo</label>
                            <input type="text" class="form-control" id="num_processo" name="num_processo"
                                value="{{ $licencas->num_processo }}">
                        </div>

                        {{--Documento SEI--}}
                        <div class="col-md-4">
                            <label for="inputEmail4" class="form-label">Documento SEI</label>
                            <input type="text" class="form-control" id="doc_sei" name="doc_sei"
                                value="{{ $licencas->doc_sei }}">
                        </div>

                        {{--Número--}}
                        <div class="col-md-2">
                            <label for="inputEmail4" class="form-label">Número</label>
                            <input type="number" class="form-control" id="numero" name="numero"  value="{{ $licencas->numero }}">
                        </div>

                        {{--Tipo--}}
                        <div class="col-md-2">
                            <label for="inputZip" class="form-label">Tipo</label>
                            <select class="form-control border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md "
                                name="id_tipo" id="id_tipo" value="{{ $licencas->tipo->sigla }}">
                                <option value="{{ $licencas->id_tipo }}">{{ $licencas->tipo->sigla }}</option>
                                @foreach ($tipo as $tipo)
                                    <option value="{{ $tipo->id }}">{{ $tipo->sigla }} - {{ $tipo->descricao }}</option>
                                @endforeach
                            </select>
                        </div>

                        {{--Região Administrativa--}}
                        <div class="col-md-4">
                            <label for="inputEmail4" class="form-label">Região Administrativa</label>
                            <select
                                class="form-control border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md"
                                name="id_ra" id="id_ra">
                                <option value="{{ $licencas->id_ra }}">{{ $licencas->regiao_adm->nome }}</option>
                                @foreach ($regiao as $regiao)
                                    <option value="{{ $regiao->id }}">{{ $regiao->nome }}</option>
                                @endforeach
                            </select>
                        </div>

                        {{--Tipo de empreendimento--}}
                        <div class="col-md-4">
                            <label for="inputEmail4" class="form-label">Tipo de empreendimento</label>
                            <select
                                class="form-control border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md "
                                name="id_empreendimento" id="id_empreendimento">
                                <option value="{{ $licencas->id_empreendimento }}">{{ $licencas->tipo_empreendimento->tipo }}</option>
                                @foreach ($tipo_empre as $empre)
                                    <option value="{{ $empre->id }}">{{ $empre->tipo }}</option>
                                @endforeach
                            </select>
                        </div>

                        {{--Situação--}}
                        <div class="col-md-4">
                            <label for="inputEmail4" class="form-label">Situação</label>
                            <select
                            class="form-control border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md "
                            name="id_situacao" id="id_situacao">
                            <option value="{{$licencas->id_situacao}}">{{$licencas->situacao->situacao}}</option>

                            @foreach ($situacao as $situacao)
                                <option value="{{ $situacao->id }}">{{ $situacao->situacao }}</option>
                            @endforeach
                        </select>
                        </div>

                        {{--Empreendimento--}}
                        <div class="col-12">
                            <label for="exampleFormControlTextarea1" class="form-label">Empreendimento</label>
                            <textarea class="form-control" id="empreendimento" name="empreendimento" rows="4" value="{{ $licencas->empreendimento }}">{{ $licencas->empreendimento }}</textarea>
                        </div>

                        {{--Data de Concessão--}}
                        <div class="col-md-6">
                            <label for="inputCity" class="form-label">Data de Concessão</label>
                            <div id="date-picker-example" class="md-form md-outline input-with-post-icon datepicker"
                            inline="true">
                            <input placeholder="Select date" type="date" id="dataconcessao" name="dataconcessao"
                                class="form-control border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md"
                                value="{{$licencas->data_concessao}}">
                            <i class="fas fa-calendar input-prefix"></i>
                        </div>
                        </div>

                        {{--Validade--}}
                        <div class="col-md-6">
                            <label for="inputCity" class="form-label">Validade</label>
                            <input id="validade" name="validade" type="number" class="form-control"
                                value="{{ $licencas->validade }}" />
                        </div>

                        {{--Vigência--}}
                        <div class="col-md-6">
                            <label for="inputCity" class="form-label">Vigência</label>
                            <select
                                class="form-control border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md "
                                name="id_vigencia" id="id_vigencia">
                                <option value="{{ $licencas->id_vigencia }}">{{ $licencas->vigencia->vigencia }}</option>
                                @foreach ($vigencia as $vigencia)
                                    <option value="{{ $vigencia->id }}">{{ $vigencia->vigencia }}</option>
                                @endforeach
                            </select>
                        </div>

                        {{--Interessado--}}
                        <div class="col-md-6">
                            <label for="inputCity" class="form-label">Interessado</label>
                                <select
                                class="form-control border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md "
                                name="interessado" id="interessado">
                                <option value="{{ 'NOVACAP' }}">Novacap</option>

                            </select>
                        </div>

                        {{--Observação--}}
                        <div class="col-12">
                            <label for="exampleFormControlTextarea1" class="form-label">Observação</label>
                            <textarea class="form-control" id="observacao" name="observacao" value="{{ $licencas->observacao }}">{{ $licencas->observacao }}</textarea>
                        </div>
                        <x-primary-button>{{ __('Editar') }}</x-primary-button>
                    </form>
    @endforeach

    </div>
    </div>
    </div>
</x-app-layout>
