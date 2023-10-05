
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>


<div class="modal fade" id="meuModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header ">
        <ul class="nav nav-tabs" id="myTab" role="tablist">
          <li class="nav-item" role="presentation">
            <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home-tab-pane" type="button" role="tab" aria-controls="home-tab-pane" aria-selected="true">Licenças</button>
          </li>
          <li class="nav-item" role="presentation">
            <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile-tab-pane" type="button" role="tab" aria-controls="profile-tab-pane" aria-selected="false">Condicionantes</button>
          </li>
        </ul>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="tab-content" id="myTabContent">
          {{-- Licenças - Notificação --}}
          <div class="tab-pane fade show active" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab" tabindex="0">
            @php
            use App\Models\Licencas;
            use Carbon\Carbon;
            
            $dataAtual = Carbon::now();
            $licencas = Licencas::where('prazo_renovacao', '<=', $dataAtual)->get();
            
        @endphp
        @foreach ($licencas as $licen)
            <div>
                <p>{{ __('Licença - ') . $licen->numero . '/' . date('Y', strtotime($licen->data_concessao)) . ' está vencida' }}
                    <a href="{{ route('licencas-view', $licen['id']) }}">
                        <button type="button" class="btn btn-link">Ver</button>
                    </a>
                    <hr>
                </p>
            </div>
        @endforeach
          </div>
          {{-- Condicionantes - Notificação --}}
          <div class="tab-pane fade" id="profile-tab-pane" role="tabpanel" aria-labelledby="profile-tab" tabindex="0">
            @php
            use App\Models\Condicionantes;
            

            $dataAtual = Carbon::now();
            $condicionantes = Condicionantes::where('prazo_condicionante', '<=', $dataAtual)->get();
            //   where('id_licencas', '=', $licencas)
          @endphp
            @foreach ($condicionantes as $condi)
            <div>
                <p>{{ __('Condicionante - ') . $condi->condicionante . ' está vencida' }}
                    <a href="{{ route('licencas-view', $condi['id_licencas']) }}">
                        <button type="button" class="btn btn-link">Ver</button>
                    </a>
                    <hr>
                </p>
            </div>
        @endforeach
          </div>
        </div>
      </div>
    </div>
  </div>
</div>