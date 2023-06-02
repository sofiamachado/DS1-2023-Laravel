<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<scr ipt src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

 
<html>
    <body>
      <br />
      <div class="container">
          <div id="login-row" class="justify-content-md-between">
            <a href="{{url('addDados')}}" class="text-info form-control"> ➕ Crie uma linha na tabela</a>
            <!-- <a> Casa mais cara </a> -->
            <a class="text-info form-control"> Aluguel ou Compra </a>
            <a class="text-info form-control"> 👆🏻 Ordem crescente - Endereço </a>
            <a class="text-info form-control"> 👆🏻 Ordem crescente - Preço </a>
            <a class="text-info form-control"> 🔎 <input type="text" placeholder="Pesquisa">  </a>
          </div>  
        @forelse ($selecoes as $sel)
          <div>
            <hr class="solid">
            <li> Imobiliaria: {{ $sel->imobiliaria }}</li>
            <li> Endereço: {{ $sel->endereco }}</li>
            <li> Preço: {{$sel->preco }} </li>
            <li> Status: {{$sel->status }} </li>
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