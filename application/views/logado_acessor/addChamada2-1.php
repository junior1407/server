</div>


<div class="container">
    <a href="index.html">Voltar</a>
    <h1 class="text-center">Adicionar Chamada</h1>
    <br>
    <div class="lista-botoes fundocinza">
        <form method="post" action="<?php echo base_url("acessor/processaLigacao1");?>">
            <div class="row">
                <input type="hidden" name="idnumero" value="<?php echo $record->id;?>">

                <div class="col-xs-6 cl-sm-6 col-lg-6">
                    <label for="telefone">Telefone</label>
                    <input disabled class="form-control" id="telefone" value="<?php echo $record->numero;?>">
                </div>
                <div class="col-xs-6 cl-sm-6 col-lg-6">
                    <label for="nome">Nome</label>
                    <input disabled class="form-control" id="telefone" value="<?php echo $record->nome;?>">

                </div>

            </div>

            <div class="row">
                <div class="col-xs-6 cl-sm-6 col-lg-6">
                    <label for="interesse">Grau de Interesse</label>
                    <select name="interesse" class="form-control" id="interesse">
                        <option></option>
                        <option value="3">Alto</option>
                        <option value="2">Médio</option>
                        <option value="1">Baixo</option>
                        <option value="0">Não Atendeu</option>

                    </select>

                </div>
                <div class="col-xs-6 cl-sm-6 col-lg-6">
                    <label for="situacao">Situacao</label>
                    <select name= "situacao" class="form-control" id="situacao">

                        <option value="0">Agendado</option>
                        <option value="1">Não atendeu</option>
                    </select>

                </div>

            </div>








            <div class="form-group">
                <label for="observ">Observação</label>
                <textarea name="obs" class="form-control noresize" rows="5" id="observ"></textarea>
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
