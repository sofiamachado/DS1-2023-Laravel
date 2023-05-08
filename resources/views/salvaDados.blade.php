<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<body>

    <div id="login">
        <h3 class="text-center text-white pt-5">Comidas</h3>
        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12">
                        <form id="login-form" class="form" action="{{ url('salvaDados') }}" method="post">
                        @csrf
                            <h3 class="text-center text-info"></h3>
                            <div class="form-group">
                                <label for="username" class="text-info">Nome:</label><br>
                                <input type="text" name="nome" id="nome" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="pais" class="text-info">País:</label><br>
                                <input type="text" name="pais" id="pais" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="chefe" class="text-info">Chefe:</label><br>
                                <input type="text" name="chefe" id="chefe" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="qtd" class="text-info">Qtd:</label><br>
                                <input type="number" name="qtd" id="qtd" class="form-control">
                            </div>
                            <div  href="{{url('salvaDados')}}" id="register-link" class="text-right">
                                <input type="submit" class="text-info"></input>
                            </div> 

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>