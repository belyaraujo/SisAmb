<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Licenças') }}
        </h2>
    </x-slot>
    
    <div class="py-12">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                
                    <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                        <div class="max-w-xl">
                            <table class="table table-hover w-full">
                                <thead class="table-primary bg-gray-50 border-b-2 border-gray-200" style="background-color: 	#cae8f5;">
                                    <tr>
                                        
                                        <div class="p-2 bg-white border-b border-gray-200">
                                            <th class="w-21 p-3 text-sm font-semibold traking-wide text-left" scope="col">Número</th>    
                                            <th class="w-21 p-3 text-sm font-semibold traking-wide text-left" scope="col">Região Adm</th>
                                            <th class="w-21 p-3 text-sm font-semibold traking-wide text-left" scope="col">Tipo empreendimento</th>
                                            <th class="w-21 p-3 text-sm font-semibold traking-wide text-left" scope="col">Tipo</th>
                                            <th class="w-21 p-3 text-sm font-semibold traking-wide text-left" scope="col">Situação</th>
                                            <th class="w-21 p-3 text-sm font-semibold traking-wide text-left" scope="col">Ações</th>
                                            </tr>
                                        </thead>
                                                <tbody class="divide-y divide-gray-100">
                                                    @foreach ($licencas as $licen)
                                                    <tr class="bg-gray-100">
                                                        
                                                            
                                                       
                                                        <td class="p-3 text-sm text-gray-700 whitespace-nowrap">
                                                            <span class="p-1.5 text-xs font-medium uppercase tracking-wider text-gray-800 bg-gray-200 rounded-lg bg-opacity-50" value="{{$licen->id}}">{{$licen->num_processo}}</span>
                                                        </td>
                        
                                                        <td class="p-3 text-sm text-gray-700 whitespace-nowrap">
                                                            <span class="p-1.5 text-xs font-medium uppercase tracking-wider text-gray-800 bg-gray-200 rounded-lg bg-opacity-50" value="{{$licen->id}}">{{$licen->regiao_adm->nome}}</span>
                                                        </td>
                                                        <td class="p-3 text-sm text-gray-700 whitespace-nowrap">
                                                            <span class="p-1.5 text-xs font-medium uppercase tracking-wider text-gray-800 bg-gray-200 rounded-lg bg-opacity-50" value="{{$licen->id}}">{{$licen->tipo_empreendimento->tipo}}</span>
                                                        </td>
                                                        <td class="p-3 text-sm text-gray-700 whitespace-nowrap">
                                                            <span class="p-1.5 text-xs font-medium uppercase tracking-wider text-gray-800 bg-gray-200 rounded-lg bg-opacity-50" value="{{$licen->id}}">{{$licen->tipo->sigla}}</span>
                                                        </td>
                                                        <td class="p-3 text-sm text-gray-700 whitespace-nowrap">
                                                            <span class="p-1.5 text-xs font-medium uppercase tracking-wider text-gray-800 bg-gray-200 rounded-lg bg-opacity-50" value="{{$licen->id}}">{{$licen->situacao->situacao}}</span>
                                                        </td>
                                                        <td class="p-3 text-sm text-gray-700 whitespace-nowrap">
                                                            <a class="btn btn-outline-primary" href={{"licencas/" .$licen['id']}} role="button">Visualizar</a>
                                                        </td>
                                                        <td class="p-3 text-sm text-gray-700 whitespace-nowrap">
                                                            <a class="btn btn-info" href={{"licenca-update/" .$licen['id']}} role="button">Editar</a>
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
