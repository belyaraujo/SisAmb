{{-- <div class="offcanvas offcanvas-start" data-bs-scroll="true" data-bs-backdrop="false" tabindex="-1" id="offcanvasScrolling" aria-labelledby="offcanvasScrollingLabel">
    <div class="offcanvas-header" style="background-color: 	#cae8f5;">
      <h5 class="offcanvas-title" id="offcanvasScrollingLabel">Notificações</h5>
      <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
      <p>
        @php
        use App\Models\Licencas;
        $licencas = Licencas::get();
      @endphp
      @foreach ($licencas as $licen)
      {{$licen->id}}
      @endforeach
      </p>
    </div>
  </div> --}}

<!-- Modal -->
{{-- Colocar no navlink data-bs-toggle="modal" data-bs-target="#meuModal" --}}

<div class="modal fade" id="meuModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Notificações - Condicionante
                    <a href="">
                        <button type="button" class="btn btn-dark">Licenças</button>
                    </a>
                </h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                @php
                    use App\Models\Condicionantes;
                    use App\Models\Licencas;
                    use Carbon\Carbon;
                    
                    $licencaId = 1;
                    
                    // Obtenha a licença específica
                    $licenca = Licencas::find($licencaId);
                    //   $licencas = Licencas::find('id');
                    $dataAtual = Carbon::now();
                    $condicionantes = Condicionantes::where('prazo_condicionante', '<=', $dataAtual)->get();
                    //   where('id_licencas', '=', $licencas)
                @endphp
                @foreach ($condicionantes as $condi)
                    <div>
                        <p>{{ __('Condicionante - ') . $condi->condicionante . ' está prestes a vencer' }}
                            <a href="{{ route('licencas-view', $condi['id']) }}">
                                <button type="button" class="btn btn-link">Link</button>
                            </a>
                            <hr>
                        </p>
                    </div>
                @endforeach
            </div>

        </div>
    </div>
</div>
