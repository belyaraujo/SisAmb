<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Licenças') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                
                    <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                        <div class="max-w-xl">
                            <table class="table table-hover w-full">
                                <thead class="table-primary bg-gray-50 border-b-2 border-gray-200" style="background-color: 	#cae8f5;">
                                    <tr>
                                        
                                        <div class="p-2 bg-white border-b border-gray-200">
                                            <th class="w-21 p-3 text-sm font-semibold traking-wide text-left" scope="col">Arquivo</th>    
                                            <th class="w-21 p-3 text-sm font-semibold traking-wide text-left" scope="col">Arquivo</th>
                                            </tr>
                                        </thead>
                                                <tbody class="divide-y divide-gray-100">
                                                   
                                                    <tr class="bg-gray-100">
                        
                                                        <th class="p-3 text-sm text-gray-700 whitespace-nowrap">
                                                            <span class="p-1.5 text-xs font-medium uppercase tracking-wider text-gray-800 bg-gray-200 rounded-lg bg-opacity-50" value="">oi</span>
                                                        </th>
                        
                                                        <td class="p-3 text-sm text-gray-700 whitespace-nowrap">
                                                            <span class="p-1.5 text-xs font-medium uppercase tracking-wider text-gray-800 bg-gray-200 rounded-lg bg-opacity-50" value="" href="#">ola</span>
                                                        </td>
                        
                        
                        
                        
                                                    </tr>
                        
        
                                </table>
                        </div>
                    </div>
                    
            </div>
        </div>
    </div>
</x-app-layout>
