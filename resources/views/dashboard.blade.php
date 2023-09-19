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
        $('#dataVencimentoInput').on('change', function () {
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
                    <div class="max-w-xl">
                        <table class="table-primary table-hover w-full">
                            <thead class="table-primary bg-gray-50 border-b-2 border-gray-200"
                                style="background-color: 	#cae8f5;">
                                <tr>

                                    <div class="p-2 bg-white border-b border-gray-200">
                                        <th class="w-21 p-3 text-sm font-semibold traking-wide text-left"
                                            scope="col">Tipo</th>
                                        <th class="w-21 p-3 text-sm font-semibold traking-wide text-left"
                                            scope="col">Número da Licença</th>
                                        <th class="w-21 p-3 text-sm font-semibold traking-wide text-left"
                                            scope="col">Ano</th>
                                        <th class="w-21 p-3 text-sm font-semibold traking-wide text-left"
                                            scope="col">Empreendimento</th>
                                        <th class="w-21 p-3 text-sm font-semibold traking-wide text-left"
                                            scope="col">RA</th>
                                        <th class="w-21 p-3 text-sm font-semibold traking-wide text-left"
                                            scope="col">Vigência</th>
                                        <th class="w-21 p-3 text-sm font-semibold traking-wide text-left"
                                            scope="col">Prazo de renovação</th>
                                            <th class="w-21 p-3 text-sm font-semibold traking-wide text-left"
                                            scope="col"></th>
                                        <th class="w-21 p-3 text-md font-semibold traking-wide text-center"
                                            scope="col">Ações</th>
                                        <th class="w-21 p-3 text-sm font-semibold traking-wide text-left"
                                            scope="col"></th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-gray-100">
                                @foreach ($licencas as $licen)
                                    @php
        $dataAtual = \Carbon\Carbon::now();
        $dataPrazoRenovacao = \Carbon\Carbon::parse($licen->prazo_renovacao);
        $classeCss = $dataAtual > $dataPrazoRenovacao ? 'bg-red-200' : 'bg-gray-100';
    @endphp

                                    <tr class="{{ $classeCss }}">

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
                                            <span
                                                class="p-1.5 text-xs font-medium uppercase tracking-wider text-gray-800 bg-gray-200 rounded-lg bg-opacity-50"
                                                value="{{ $licen->id }}">{{ $licen->prazo_renovacao }}</span>
                                        </td>
                                        <td class="p-3 text-sm text-gray-700 whitespace-nowrap">
                                            <a class="btn btn-outline-primary" href={{ 'licencas/' . $licen['id'] }}
                                                role="button">Visualizar</a>
                                        </td>

                                        @if (Auth::check() && Auth::user()->admin == 1)
                                            <td class="p-3 text-sm text-gray-700 whitespace-nowrap">
                                                <a class="btn btn-info" href={{ 'licenca-update/' . $licen['id'] }}
                                                    role="button">Editar</a>
                                            </td>
                                        @endif
                                        <td class="p-3 text-sm text-gray-700 whitespace-nowrap pr-10">
                                            <span
                                                class="p-1.5 text-xs font-medium uppercase tracking-wider text-blue-800 bg-blue-200 rounded-lg bg-opacity-50">
                                                <a href="{{ route('download', $licen->id) }}"
                                                    class="font-bold text-black hover:underline">download</a>
                                            </span>
                                        </td>



                                    </tr>
                                @endforeach
                        </table>
                    </div>
                </div>

            </div>
        </div>
    </div>
</x-app-layout>
