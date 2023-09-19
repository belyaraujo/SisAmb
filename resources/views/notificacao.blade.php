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
      @foreach($licencas as $licen)
      {{$licen->id}}
      @endforeach
      </p>
    </div>
  </div> --}}

  <!-- Modal -->
{{--Colocar no navlink data-bs-toggle="modal" data-bs-target="#meuModal"--}}

                <div class="modal fade" id="meuModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h1 class="modal-title fs-5" id="exampleModalLabel">Notificações</h1>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                          @php
                          use App\Models\Licencas;
                          use Carbon\Carbon;
                          
                          $dataAtual = Carbon::now();
                          $licencas = Licencas::where('prazo_renovacao', '<=', $dataAtual)->get();
                          
                          @endphp
      @foreach($licencas as $licen)
      <div>
        <p>{{ __('Licença - ') . $licen->numero .'/'. date('Y', strtotime($licen->data_concessao)) . ' está prestes a vencer'}} 
          <button type="button" class="btn btn-link">Link</button>
        </p>
      </div>
      
      @endforeach
                        </div>
                        
                      </div>
                    </div>
                  </div>