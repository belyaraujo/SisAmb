<x-app-layout>
    @foreach ($licencas as $licencas)
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Licença - ') . $licencas->numero . '/' . date('Y', strtotime($licencas->data_concessao)) }}

            </h2>
        </x-slot>
        <script>
            // Detecta a alteração do campo de data de vencimento (você pode usar eventos adequados)
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


        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">


        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
                <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">


                    <form class="row g-3" action="{{ route('licencas-view', $licencas->id) }}">

                        <input type="text" class="form-control" disabled id="inputEmail4"
                            value="{{ $licencas->id }}">
                        <div class="col-md-4">
                            <label for="inputEmail4" class="form-label">Número do processo</label>
                            <input type="text" class="form-control" disabled id="inputEmail4"
                                value="{{ $licencas->num_processo }}">
                        </div>

                        <div class="col-md-4">
                            <label for="inputEmail4" class="form-label">Documento SEI</label>
                            <input type="text" class="form-control" disabled id="inputEmail4"
                                value="{{ $licencas->doc_sei }}">
                        </div>

                        <div class="col-md-2">
                            <label for="inputEmail4" class="form-label">Número da Licença</label>
                            <input type="text" class="form-control" disabled id="inputEmail4"
                                value="{{ $licencas->numero }}">
                        </div>

                        <div class="col-md-2">
                            <label for="inputZip" class="form-label">Tipo</label>
                            <input type="text" class="form-control" disabled id="inputZip"
                                value="{{ $licencas->tipo->sigla }}">
                        </div>
                        <div class="col-md-4">
                            <label for="inputEmail4" class="form-label">Região Administrativa</label>
                            <input type="text" class="form-control" disabled id="inputEmail4"
                                value="{{ $licencas->regiao_adm->nome }}">
                        </div>
                        <div class="col-md-4">
                            <label for="inputEmail4" class="form-label">Tipo de empreendimento</label>
                            <input type="text" class="form-control" disabled id="inputEmail4"
                                value="{{ $licencas->tipo_empreendimento ? $licencas->tipo_empreendimento->tipo : '' }}">
                        </div>


                        <div class="col-md-4">
                            <label for="inputEmail4" class="form-label">Situação</label>
                            <input type="text" class="form-control" disabled id="inputEmail4"
                                value="{{ $licencas->situacao ? $licencas->situacao->situacao : '' }}">
                        </div>


                        <div class="col-12">
                            <label for="exampleFormControlTextarea1" class="form-label">Empreendimento</label>
                            <textarea class="form-control" disabled id="exampleFormControlTextarea1" rows="4"
                                value="{{ $licencas->empreendimento }}">{{ $licencas->empreendimento }}</textarea>
                        </div>

                        <div class="col-md-6">
                            <label for="inputCity" class="form-label">Data de Concessão</label>
                            <input type="text" class="form-control" disabled id="inputCity"
                                value="{{ date('d/m/Y', strtotime($licencas->data_concessao)) }}">
                        </div>
                        <div class="col-md-6">
                            <label for="inputCity" class="form-label">Data de vencimento</label>
                            <input type="text" class="form-control" disabled id="inputCity"
                                value="{{ date('d/m/Y', strtotime($licencas->data_vencimento)) }}">
                        </div>
                        <div class="col-md-6">
                            <label for="inputCity" class="form-label">Vigência</label>
                            <input type="text" class="form-control" disabled id="inputCity"
                                value="{{ $licencas->vigencia ? $licencas->vigencia->vigencia : '' }}">
                        </div>
                        <div class="col-md-6">
                            <label for="inputCity" class="form-label">Interessado</label>
                            <input type="text" class="form-control" disabled id="inputCity"
                                value="{{ $licencas->interessado }}">
                        </div>

                        <div class="col-12">
                            <label for="exampleFormControlTextarea1" class="form-label">Observação</label>
                            <textarea class="form-control" disabled id="exampleFormControlTextarea1" value="{{ $licencas->observacao }}">{{ $licencas->observacao }}</textarea>
                        </div>
                </div>
                {{-- Condicionantes --}}
                <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
                    integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM"
                    crossorigin="anonymous">


                <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">

                    <p class="font-semibold text-xl text-gray-800 leading-tight">
                        {{ __('Condicionantes') }}

                        @if (Auth::check() && Auth::user()->admin == 1)
                            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                <a class="btn btn-primary"
                                    href={{ route('cadastro-condicionantes', $licencas['id']) }}
                                    role="button">Adicionar Condicionante</a>
                            </div>
                        @endif

                    </p>
                    <table class="table-primary table-hover w-full">
                        <thead
                            class="table-primary table-primary p-3 bg-sky-600 shadow dark:bg-gray-800 border-b border-gray-100 dark:border-gray-700">
                            <tr>

                                <div class="p-2 bg-white border-b border-gray-200">
                                    <th class="w-21 p-3 text-sm font-semibold traking-wide text-left text-white"
                                        scope="col">Condicionantes</th>
                                    <th class="w-21 p-3 text-sm font-semibold traking-wide text-left text-white"
                                        scope="col">Prazo da Condicionante</th>
                                    <th class="w-21 p-3 text-sm font-semibold traking-wide text-left text-white"
                                        scope="col">Editar</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-100">
                            @foreach ($condicionantes as $cond)
                                @php
                                    $dataAtual = \Carbon\Carbon::now();
                                    $dataPrazoRenovacao = \Carbon\Carbon::parse($cond->prazo_condicionante);
                                    $classeCss = $dataAtual->greaterThan($dataPrazoRenovacao) ? 'bg-red-200' : 'bg-gray-100';
                                @endphp
                                <tr class="">
                                    <td class="p-3 text-sm text-gray-700 whitespace-nowrap">
                                        <span
                                            class="p-1.5 text-xs font-medium uppercase tracking-wider text-gray-800 bg-gray-200 rounded-lg bg-opacity-50"
                                            value="{{ $cond->id }}">{{ $cond->condicionante }}</span>
                                    </td>

                                    <td class="p-3 text-sm text-gray-700 whitespace-nowrap">
                                        <span class="{{ $classeCss }}"
                                            class="p-1.5 text-xs font-medium uppercase tracking-wider text-gray-800 bg-gray-200 rounded-lg bg-opacity-50"
                                            value="{{ $cond->id }}">{{ date('d/m/Y', strtotime($cond->prazo_condicionante)) }}</span>
                                    </td>
                                    <td class="p-3 text-sm text-gray-700 whitespace-nowrap">
                                        <a
                                            href="{{ route('condicionantes-update', ['id' => $cond->id]) }}"class="text-warning">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25"
                                                fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                                <path
                                                    d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                                                <path fill-rule="evenodd"
                                                    d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
                                            </svg>
                                        </a>
                                    </td>

                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                </form>
    @endforeach

    </div>

    </div>

</x-app-layout>
