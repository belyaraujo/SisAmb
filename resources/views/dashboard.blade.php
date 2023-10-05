<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Licenças') }}
        </h2>
    </x-slot>

    <style>
        .material-symbols-outlined {
            font-variation-settings:
                'FILL' 0,
                'wght' 400,
                'GRAD' 0,
                'opsz' 48
        }
    </style>

    <script>
        $('#dataVencimentoInput').on('change', function() {
            var novaDataVencimento = $(this).val();
            var linha = $(this).closest('tr');

            // Obtém a classe de cor original da linha
            var classeOriginal = linha.data('original-class');

            // Calcula a nova classe com base na nova data de vencimento
            var dataAtual = new Date();
            var dataVencimento = new Date(novaDataVencimento);

            if (dataAtual > dataVencimento) {
                // A data está vencida, aplique a classe de cor desejada (por exemplo, vermelha)
                linha.removeClass(classeOriginal).addClass('bg-red-200');
            } else {
                // A data não está vencida, restaure a classe de cor original
                linha.removeClass('bg-red-200').addClass(classeOriginal);
            }
        });
    </script>

    <div class="py-12">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
        <link rel="stylesheet"
            href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">

                <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                    <div class="">
                        <table class="table-primary table-hover w-full">
                            <thead class="table-primary table-primary p-3 bg-sky-600  dark:bg-gray-800 border-b border-gray-100 dark:border-gray-700">
                                <tr>

                                    <div class="p-2 bg-white border-b border-gray-200 text-white">
                                        <th class="w-21 p-3 text-sm font-semibold traking-wide text-left text-white"
                                            scope="col">Tipo</th>
                                        <th class="w-21 p-3 text-sm font-semibold traking-wide text-left text-white"
                                            scope="col">Número da Licença</th>
                                        <th class="w-21 p-3 text-sm font-semibold traking-wide text-left text-white"
                                            scope="col">Ano</th>
                                        <th class="w-21 p-3 text-sm font-semibold traking-wide text-left text-white"
                                            scope="col">Empreendimento</th>
                                        <th class="w-21 p-3 text-sm font-semibold traking-wide text-left text-white"
                                            scope="col">RA</th>
                                        <th class="w-21 p-3 text-sm font-semibold traking-wide text-left text-white"
                                            scope="col">Vigência</th>
                                        <th class="w-21 p-3 text-sm font-semibold traking-wide text-left text-white"
                                            scope="col">Prazo de renovação</th>
                                        <th class="w-21 p-3 text-sm font-semibold traking-wide text-left text-white"
                                            scope="col"></th>
                                        <th class="w-21 p-3 text-sm font-semibold traking-wide text-center text-white"
                                            scope="col"></th>
                                        <th class="w-21 p-3 text-sm font-semibold traking-wide text-left"
                                            scope="col"></th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-gray-100">
                                @foreach ($licencas as $licen)
                                    @php
                                        $dataAtual = \Carbon\Carbon::now();
                                        $dataPrazoRenovacao = \Carbon\Carbon::parse($licen->prazo_renovacao);
                                        $classeCss = $dataAtual > $dataPrazoRenovacao ? 'bg-red-300 p-1.5 text-xs font-medium uppercase tracking-wider rounded-lg bg-opacity-50' : 'bg-gray-100 p-1.5 text-xs font-medium uppercase tracking-wider rounded-lg bg-opacity-50';
                                    @endphp

                                    <tr>

                                        <td class="p-3 text-sm text-gray-700 whitespace-nowrap">
                                            <span
                                                class="p-1.5 text-xs font-medium uppercase tracking-wider text-gray-800 bg-gray-200 rounded-lg bg-opacity-50"
                                                value="{{ $licen->id }}">{{ $licen->tipo->sigla }}</span>
                                        </td>

                                        <td class="p-3 text-sm text-gray-700 whitespace-nowrap">
                                            <span
                                                class="p-1.5 text-xs font-medium uppercase tracking-wider text-gray-800 bg-gray-200 rounded-lg bg-opacity-50"
                                                value="{{ $licen->id }}">{{ $licen->numero }}</span>
                                        </td>
                                        <td class="p-3 text-sm text-gray-700 whitespace-nowrap">
                                            <span
                                                class="p-1.5 text-xs font-medium uppercase tracking-wider text-gray-800 bg-gray-200 rounded-lg bg-opacity-50"
                                                value="{{ $licen->id }}">{{ date('Y', strtotime($licen->data_concessao)) }}</span>
                                        </td>
                                        <td class="p-3 text-sm text-gray-700 w-50">
                                            <span
                                                class="p-1.5 text-xs font-medium uppercase tracking-wider text-gray-800 bg-gray-200 rounded-lg bg-opacity-50 cont"
                                                value="{{ $licen->id }}">{{ $licen->empreendimento }}</span>
                                        </td>
                                        <td class="p-3 text-sm text-gray-700 whitespace-nowrap">
                                            <span
                                                class="p-1.5 text-xs font-medium uppercase tracking-wider text-gray-800 bg-gray-200 rounded-lg bg-opacity-50"
                                                value="{{ $licen->id }}">{{ $licen->regiao_adm->nome }}</span>
                                        </td>

                                        <td class="p-3 text-sm text-gray-700 whitespace-nowrap">
                                            @if ($licen)
                                                <span
                                                    class="p-1.5 text-xs font-medium uppercase tracking-wider text-gray-800 bg-gray-200 rounded-lg bg-opacity-50"
                                                    value="{{ $licen->id }}">
                                                    @if ($licen->vigencia)
                                                        {{ $licen->vigencia->vigencia }}
                                                    @else
                                                        {{ ' - ' }}
                                                    @endif
                                                </span>
                                            @endif
                                        </td>

                                        <td class="p-3 text-sm text-gray-700 whitespace-nowrap">
                                            <span class="{{ $classeCss }}"
                                                class="p-1.5 text-xs font-medium uppercase tracking-wider text-gray-800 bg-gray-200 rounded-lg bg-opacity-50"
                                                value="{{ $licen->id }}">{{ date('d/m/Y', strtotime($licen->prazo_renovacao)) }}</span>
                                        </td>
                                        <td class="p-3 text-sm text-gray-700 whitespace-nowrap">
                                            <a href={{ 'licencas/' . $licen['id'] }} role="button">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16">
                                                    <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z"/>
                                                    <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z"/>
                                                  </svg>
                                                </a>
                                        </td>

                                        @if (Auth::check() && Auth::user()->admin == 1)
                                            <td class="p-3 text-sm text-gray-700 whitespace-nowrap">
                                                <a class="text-warning" href={{ 'licenca-update/' . $licen['id'] }} 
                                                role="button">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                                    <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                                                    <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                                                  </svg>
                                                </a>
                                            </td>
                                        @endif
                                        <td class="p-3 text-sm text-gray-700 whitespace-nowrap">
                                            <span
                                                class="">
                                                <a href="{{ route('download', $licen->id) }}"
                                                    class="text-dark">
                                                      <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-filetype-pdf" viewBox="0 0 16 16">
                                                        <path fill-rule="evenodd" d="M14 4.5V14a2 2 0 0 1-2 2h-1v-1h1a1 1 0 0 0 1-1V4.5h-2A1.5 1.5 0 0 1 9.5 3V1H4a1 1 0 0 0-1 1v9H2V2a2 2 0 0 1 2-2h5.5L14 4.5ZM1.6 11.85H0v3.999h.791v-1.342h.803c.287 0 .531-.057.732-.173.203-.117.358-.275.463-.474a1.42 1.42 0 0 0 .161-.677c0-.25-.053-.476-.158-.677a1.176 1.176 0 0 0-.46-.477c-.2-.12-.443-.179-.732-.179Zm.545 1.333a.795.795 0 0 1-.085.38.574.574 0 0 1-.238.241.794.794 0 0 1-.375.082H.788V12.48h.66c.218 0 .389.06.512.181.123.122.185.296.185.522Zm1.217-1.333v3.999h1.46c.401 0 .734-.08.998-.237a1.45 1.45 0 0 0 .595-.689c.13-.3.196-.662.196-1.084 0-.42-.065-.778-.196-1.075a1.426 1.426 0 0 0-.589-.68c-.264-.156-.599-.234-1.005-.234H3.362Zm.791.645h.563c.248 0 .45.05.609.152a.89.89 0 0 1 .354.454c.079.201.118.452.118.753a2.3 2.3 0 0 1-.068.592 1.14 1.14 0 0 1-.196.422.8.8 0 0 1-.334.252 1.298 1.298 0 0 1-.483.082h-.563v-2.707Zm3.743 1.763v1.591h-.79V11.85h2.548v.653H7.896v1.117h1.606v.638H7.896Z"/>
                                                      </svg>
                                                    </a>
                                            </span>
                                        </td>
                                    </tr>
                                @endforeach
                        </table>
                        <div style="margin: 0px">
                            {{ $licencas->onEachSide(5)->links() }}
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</x-app-layout>
