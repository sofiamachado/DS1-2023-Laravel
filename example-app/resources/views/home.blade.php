<html>

<head>
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>

<body>
  <br />
  <div class="container">
    <div id="login-row" class="justify-content-md-between">
      <a href="{{url('addDados')}}" class="text-info form-control"> ➕ Crie uma linha na tabela</a>
      <!-- <a> Casa mais cara </a> -->
      <a href="{{route('filtro', ['search' => $search, 'ordem' => $ordem, 'status' => 0])}}" class="text-info form-control"> Casas para Aluguel </a>
      <a href="{{route('filtro', ['search' => $search, 'ordem' => $ordem, 'status' => 1])}}" class="text-info form-control"> Casas à Venda </a>
      <a href="{{route('filtro', ['search' => $search, 'ordem' => 'endereco', 'status' => $status])}}" class="text-info form-control"> 👆🏻 Ordem crescente - Endereço </a>
      <a href="{{route('filtro', ['search' => $search, 'ordem' => 'preco', 'status' => $status])}}" class="text-info form-control"> 👆🏻 Ordem crescente - Preço </a>
      <a href="{{url('/')}}" class="text-info form-control"> Remover todos os filtros </a>
      <form action="{{url('filtro')}}" method="GET">
        <input name="search" id="search" value="{{isset($search) ? $search : ''}}" type="search" placeholder="Pesquisar casas ou imobiliárias" size="50">
      </form>
    </div>
    @forelse ($selecoes as $sel)
    <div>
      <hr class="solid">
      <li> Imobiliaria: {{ $sel->imobiliaria }}</li>
      <li> Endereço: {{ $sel->endereco }}</li>
      <li> Preço: R${{ $sel->preco }},00 </li>
      <li> Status: {{ $sel->status ? 'À Venda' : 'Para Alugar' }} </li>
      <div class="text-right">
        <a href="{{url('editaDados/'.$sel['id'])}}" class=" text-white bg-primary p-2 mr-1"> Edita </a>
        <a href="{{url('deletaDados/'.$sel['id'])}}" class="text-white bg-danger p-2" onclick="return confirm('Deletar casa?')">Deleta</a>
      </div>
    </div>
    @empty
    <p> Está vazio </p>
  </div>
  @endforelse
</body>

</html>