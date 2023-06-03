<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<body>

    <div id="login">
        <h3 class="text-center text-white pt-5">Casas</h3>
        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12">
                        <form id="login-form" class="form" action="{{ url('editaDados/'.$casa->id) }}" method="post">
                            @csrf
                            <h3 class="text-center text-info"></h3>
                            <div class="form-group">
                                <label for="imobiliaria" class="text-info">Nome da Imobiliária:</label><br>
                                <input type="text" name="imobiliaria" id="imobiliaria" class="form-control" placeholder="{{ $casa->imobiliaria }}">
                            </div>
                            <div class="form-group">
                                <label for="endereco" class="text-info">Endereço:</label><br>
                                <input type="text" name="endereco" id="endereco" class="form-control" placeholder="{{ $casa->endereco}}">
                            </div>
                            <div class="form-group">
                                <label for="preco" class="text-info">Preço:</label><br>
                                <input type="number" name="preco" id="preco" class="form-control" placeholder="{{ $casa->preco }}">
                            </div>
                            <div class="form-group">
                                <label for="status" class="text-info">Status:</label><br>
                                <select name="status" id="status" class="form-control">
                                    <option value="0">Para Alugar</option>
                                    <option value="1">À Venda</option>
                                </select>
                                <script>
                                    select = document.getElementById('status');
                                    select.value = "{{ $casa->status }}";
                                </script>
                            </div>
                            <input type="submit" class="text-info"></input>


                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>