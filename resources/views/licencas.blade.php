<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Licença-número') }}
        </h2>
    </x-slot>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
 

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                
                   
                    <form class="row g-3">
                        <input type="text" class="form-control" disabled id="inputEmail4" value="{{$licencas}}">
                        <div class="col-md-4">
                            <label for="inputEmail4" class="form-label">Número do processo</label>
                            <input type="text" class="form-control" disabled id="inputEmail4" value="">
                        </div>

                          <div class="col-md-4">
                            <label for="inputEmail4" class="form-label">Documento SEI</label>
                            <input type="text" class="form-control" disabled id="inputEmail4" value="">
                          </div>

                          <div class="col-md-2">
                            <label for="inputEmail4" class="form-label">Número</label>
                            <input type="text" class="form-control" disabled id="inputEmail4" value="">
                          </div>

                          <div class="col-md-2">
                            <label for="inputZip" class="form-label">Tipo</label>
                            <input type="text" class="form-control" disabled id="inputZip">
                          </div>
                        <div class="col-md-6">
                          <label for="inputEmail4" class="form-label">Região Administrativa</label>
                          <input type="text" class="form-control" disabled id="inputEmail4" value="">
                        </div>
                        <div class="col-md-6">
                            <label for="inputEmail4" class="form-label">Tipo de empreendimento</label>
                            <input type="text" class="form-control" disabled id="inputEmail4" value="">
                        </div>

                        <div class="col-12">
                            <label for="exampleFormControlTextarea1" class="form-label">Empreendimento</label>
                            <textarea class="form-control" disabled id="exampleFormControlTextarea1" rows="4"></textarea>
                        </div>

                        <div class="col-md-6">
                            <label for="inputCity" class="form-label">Data de Concessão</label>
                            <input type="text" class="form-control" disabled id="inputCity">
                          </div>
                          <div class="col-md-6">
                              <label for="inputCity" class="form-label">Data de vencimento</label>
                              <input type="text" class="form-control" disabled id="inputCity">
                            </div>
                            <div class="col-md-6">
                                <label for="inputCity" class="form-label">Vigência</label>
                                <input type="text" class="form-control" disabled id="inputCity">
                              </div>
                              <div class="col-md-6">
                                <label for="inputCity" class="form-label">Interessado</label>
                                <input type="text" class="form-control" disabled id="inputCity">
                              </div>

                        <div class="col-12">
                            <label for="exampleFormControlTextarea1" class="form-label">Observação</label>
                            <textarea class="form-control" disabled id="exampleFormControlTextarea1" rows="4"></textarea>
                        </div>
                      </form>
                      
                
            </div>

            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                
                    <p class="font-semibold text-xl text-gray-800 leading-tight">
                        {{ __('Condicionantes') }}

                        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                        <button type="button" class="btn btn-primary">Adicionar Condicionante</button>
                        </div>
                    </p>
                    <table class="table table-hover w-full">
                        <thead class="table-primary bg-gray-50 border-b-2 border-gray-200" style="background-color: 	#cae8f5;">
                            <tr>
                                
                                <div class="p-2 bg-white border-b border-gray-200">
                                    <th class="w-21 p-3 text-sm font-semibold traking-wide text-left" scope="col">Condicionantes</th>    
                                    <th class="w-21 p-3 text-sm font-semibold traking-wide text-left" scope="col">Prazo da Condicionante</th>
                                    </tr>
                                </thead>
                                        <tbody class="divide-y divide-gray-100">
                                            
                                            <tr class="bg-gray-100">
                                               
                                                <td class="p-3 text-sm text-gray-700 whitespace-nowrap">
                                                    <span class="p-1.5 text-xs font-medium uppercase tracking-wider text-gray-800 bg-gray-200 rounded-lg bg-opacity-50" value="">Condicionante teste</span>
                                                </td>

                                                <td class="p-3 text-sm text-gray-700 whitespace-nowrap">
                                                    <span class="p-1.5 text-xs font-medium uppercase tracking-wider text-gray-800 bg-gray-200 rounded-lg bg-opacity-50" value="">00/00/0000</span>
                                                </td>
                
                
                                            </tr>
                                            <tr class="bg-gray-100">
                                               
                                                <td class="p-3 text-sm text-gray-700 whitespace-nowrap">
                                                    <span class="p-1.5 text-xs font-medium uppercase tracking-wider text-gray-800 bg-gray-200 rounded-lg bg-opacity-50" value="">Condicionante teste 2</span>
                                                </td>

                                                <td class="p-3 text-sm text-gray-700 whitespace-nowrap">
                                                    <span class="p-1.5 text-xs font-medium uppercase tracking-wider text-gray-800 bg-gray-200 rounded-lg bg-opacity-50" value="">00/00/0000</span>
                                                </td>
                
                
                                            </tr>
                                            

                        </table>
                
            </div>

            
        </div>
    </div>
</x-app-layout>
