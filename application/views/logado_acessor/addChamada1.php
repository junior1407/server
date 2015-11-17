
</div>


<div class="container">
    <a href="<?php echo base_url("");?>">Voltar</a>
    <h1 class="text-center">Adicionar Chamada</h1>
    <br>
    <div class="lista-botoes fundocinza">
        <form action="<?php echo base_url("acessor/adicionarligacao2");?>" method="post">


                <div class="form-group">
                    <label for="telefone">Telefone</label>
                    <input class="form-control" name= "telefone" required type="number" id="telefone">
                </div>

            <button type="submit" class="btn btn-default">Submit</button>
        </form>



    </div>

</div>


<script src="js/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>
<script src="js/menu.js"></script>
<script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
</body>
</html>
