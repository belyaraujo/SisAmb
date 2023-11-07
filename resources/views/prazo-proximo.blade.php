<!-- prazo-proximo.blade.php -->

<h1>Prezado(a) {{ $user->name }},</h1>


@foreach ($licencas as $licenca)
<p>O prazo de renovação da(s) sua(s) licença(s) está se aproximando em {{ $licenca->prazo_renovacao }}. Veja os detalhes:</p>


        <p>ID da Licença: {{ $licenca->numero }}</p>
        <p>Nome: {{ $licenca->nome }}</p>

@endforeach

<p>Se precisar de mais informações, entre em contato conosco.</p>
