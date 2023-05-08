
<html>
    <body>
        <h1>oi: {{ $name }}</h1>
 <div class="text-right">
                <a href="{{url('salvaDados')}}" class="text-info">Crie uma linha na tabela</a>
          </div>

        @forelse ($selecoes as $sel)
          <hr clss="solid">
          <li> Nome {{ $sel->nome }}</li>
          <li> País: {{ $sel->pais }}</li>
          <li> Chfe: {{ $sel->chefe }}</li>
          <li> Qtd: {{$sel->qtd }} </li>
          <div class="text-right">
                 <a href="{{url('deletaDados')}}" class="text-info">Deleta</a>
          </div>
           @empty
          <p> Está vazio </p>
        @endforelse
 
    

    </body>

    </html>