
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">
    <title>Pagina de Login</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url("css/bootstrap.min.css");?>" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?php echo base_url("css/custom/login_page/estilos.css");?>" rel="stylesheet">


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>

<div class="container">

    <form class="form-signin" method="post" action="<?php echo base_url("login/processarLogin");?>">
        <img class="img-responsive" src="<?php echo base_url("img/logoreduzido.png");?>" >
        <br>
       <?php if ($erro){
                echo '<h2 class="text-center">Login com erro</h2>';}  ?>
        <label for="inputlogin" class="sr-only">Nome de Usuário</label><!--sronly invisivel -->
        <input type="text" id="inputLogin" class="form-control" placeholder="Usuário" required autofocus name="login">

        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" id="inputPassword" class="form-control" placeholder="Senha" required name="senha">
        <select class="form-control" name="tipo">
            <option value="1">Acessor Comercial</option>
            <option value="2">Diretor</option>
        </select>




        <div class="checkbox">
            <label>
                <input type="checkbox" value="remember-me"> Lembrar credenciais
            </label>
        </div>

        <button class="btn btn-lg btn-primary btn-block" type="submit">Efetuar Login</button>
    </form>

</div> <!-- /container -->


<script src="js/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>
<script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
</body>
</html>
