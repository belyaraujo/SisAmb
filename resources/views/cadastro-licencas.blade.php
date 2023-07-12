<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Cadastro Licenças') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">

                <div class="form-container">
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
                  </div>

            </div>
        </div>
    </div>
</x-app-layout>
