
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
    <link href="<?php echo base_url("css/custom/acessor_estilos.css");?>" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">


</head>

<body>

<div class="container cinzaTopo ">

    <img src="<?php echo base_url("img/perfil.jpg");?>" width="70px" class="img-rounded" style="margin-top: 10px; margin-bottom: 10px ">
</div>

<div class="container text-center">
    <div class="container">
        <img src="<?php echo base_url("img/logo.png");?>" class="imagem-cabecalho" >

    </div>
    <!--MTH, Acoes Ligacoes, Atendimentos,
        Adicionar, Editar ultima, Apagar ultima
    -->



    <div class="lista-botoes fundocinza">

        <button class="tp1 btn btn-primary azul-wizard topico-primeiro" type="button" data-toggle="collapse" data-target="#ligacoes" aria-expanded="false" aria-controls="collapseExample">
            <span style="float: left;">  <i class="fa fa-phone-square branco"></i> </span>
            Ligações

        </button>
        <div class="collapse" id="ligacoes">
            <a href="<?php echo base_url();?>"><button   class="btn btn-primary azul-wizard sub-topico" type="button" data-toggle="collapse" data-target="#ligacoes" aria-expanded="false" aria-controls="collapseExample">
                    <span style="float: left;">  <i class="fa fa-plus-square  black"></i> </span>
                    Adicionar

                </button></a>

            <button class="btn btn-primary azul-wizard sub-topico" type="button" data-toggle="collapse" data-target="#ligacoes" aria-expanded="false" aria-controls="collapseExample">
                <span style="float: left;">  <i class="fa fa-pencil-square black"></i> </span>
                Editar última

            </button>
            <button class="btn btn-primary azul-wizard sub-topico" type="button" data-toggle="collapse" data-target="#ligacoes" aria-expanded="false" aria-controls="collapseExample">
                <span style="float: left;">  <i class="fa fa-times red "></i> </span>
                Apagar última

            </button>


        </div>
    </div>
    <div class="lista-botoes fundocinza">

        <button class="tp2 btn btn-primary azul-wizard bordas-zeradas" type="button" data-toggle="collapse" data-target="#ligacoes1" aria-expanded="false" aria-controls="collapseExample">
            <span style="float: left;">  <i class="fa fa-phone-square branco"></i> </span>
            Ligações

        </button>
        <div class="collapse" id="ligacoes1">
            <button class="btn btn-primary azul-wizard sub-topico" type="button" data-toggle="collapse" data-target="#ligacoes1" aria-expanded="false" aria-controls="collapseExample">
                <span style="float: left;">  <i class="fa fa-phone-square black"></i> </span>
                Adicionar

            </button>

            <button class="btn btn-primary azul-wizard sub-topico" type="button" data-toggle="collapse" data-target="#ligacoes1" aria-expanded="false" aria-controls="collapseExample">
                <span style="float: left;">  <i class="fa fa-phone-square black"></i> </span>
                Editar última

            </button>

        </div>
    </div>


    <div class="lista-botoes fundocinza">

        <button class="tp3 btn btn-primary azul-wizard  bordas-zeradas ultimo" type="button" data-toggle="collapse" data-target="#ligacoes2" aria-expanded="false" aria-controls="collapseExample">
            <span style="float: left;">  <i class="fa fa-phone-square branco"></i> </span>
            Ligações

        </button>
        <div class="collapse" id="ligacoes2">
            <button class="btn btn-primary azul-wizard sub-topico" type="button" data-toggle="collapse" data-target="#ligacoes2" aria-expanded="false" aria-controls="collapseExample">
                <span style="float: left;">  <i class="fa fa-phone-square black"></i> </span>
                Adicionar

            </button>

            <button class="btn btn-primary azul-wizard  sub-topico ultimo" type="button" data-toggle="collapse" data-target="#ligacoes2" aria-expanded="false" aria-controls="collapseExample">
                <span style="float: left;">  <i class="fa fa-phone-square black"></i> </span>
                Editar última

            </button>

        </div>
    </div>
</div>


<script src="<?php echo  base_url();?>/js/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="<?php echo  base_url();?>/js/bootstrap.min.js"></script>
<script src="<?php echo  base_url();?>/js/menu.js"></script>
<script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
</body>
</html>
