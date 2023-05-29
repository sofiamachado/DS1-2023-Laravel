
<html>
    <body>
          <div class="text-right">
              <a href="{{url('addDados')}}" class="text-info">Crie uma linha na tabela</a>
              <!-- <a> Casa mais cara </a> -->
              <a> Aluguel </a>
              <a> Compra </a>
              <a> Ordem crescente - Endereço </a>
              <a> Ordem crescente - Preço </a>
              <a> <input type="text" placeholder="Pesquisa">  </a>
          </div>
        @forelse ($selecoes as $sel)
          <hr class="solid">
          <li> Imobiliaria: {{ $sel->Imobiliaria }}</li>
          <li> Endereço: {{ $sel->Endereco }}</li>
          <li> Preço: {{$sel->Preco }} </li>
          <li> Status: {{$sel->Status }} </li>
          <div class="text-right">
            <a href="{{url('editaDados/'.$sel['id'])}}"> Edita </a>
            <a href="{{url('deletaDados/'.$sel['id'])}}" class="text-info" onclick="return confirm('Deletar casa?')">Deleta</a>
          </div>
        @empty
          <p> Está vazio </p>
        @endforelse
    </body>
</html>