<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Cadastro Licenças') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">

                <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                    <div class="max-w-xl">
                        <div>

                            <div class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 ">


                                <select
                                    class="form-control border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md "
                                    name="quant_resmas" id="quant_resmas">
                                    <option>RA</option>
                                </select>

                                <select
                                    class="form-control border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md "
                                    name="quant_resmas" id="quant_resmas">
                                    <option>Empreendimento</option>
                                </select>
                                <select
                                    class="form-control border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md "
                                    name="quant_resmas" id="quant_resmas">
                                    <option>Tipo</option>
                                </select>
                                <select
                                    class="form-control border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md "
                                    name="quant_resmas" id="quant_resmas">
                                    <option>Situação</option>
                                </select>
                                <select
                                    class="form-control border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md "
                                    name="quant_resmas" id="quant_resmas">
                                    <option>Bacia</option>
                                </select>


                            </div>


                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</x-app-layout>
