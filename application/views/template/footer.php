
</div>
<!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
<script src="<?php echo base_url('assets/js/bootstrap.bundle.min.js'); ?>" 
crossorigin="anonymous"></script>

<!-- Inserir Sucesso -->
<div id="sucesso" class="modal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <font color="blue"><h5 class="modal-title">Cadastro</h5></font>
                <div class="modal-body">
                    <br><p>Cadastro efetuado com sucesso!<p><br>
                </div>
                <div class="modal-footer">
                    <br><button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button><br>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Inserir Erro -->
<div id="err" class="modal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <font color="red"><h5 class="modal-title">Erro</h5></font>
                <div class="modal-body">
                    <br><p>Erro ao inserir Carro!<p><br>
                </div>
                <div class="modal-footer">
                    <br><button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button><br>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Atualizar Sucesso -->
<div id="atualizar" class="modal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <font color="black"><h5 class="modal-title">Atualizado</h5></font>
                <div class="modal-body">
                    <br><p>Atualizado com sucesso!<p><br>
                </div>
                <div class="modal-footer">
                    <br><button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button><br>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Atualizar Erro -->
<div id="atualizarErro" class="modal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <font color="red"><h5 class="modal-title">Erro</h5></font>
                <div class="modal-body">
                    <br><p>Erro ao Atualizar<p><br>
                </div>
                <div class="modal-footer">
                    <br><button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button><br>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Deletar Sucesso -->
<div id="deletar" class="modal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <font color="black"><h5 class="modal-title">Deletar</h5></font>
                <div class="modal-body">
                    <br><p>Deletado com sucesso!<p><br>
                </div>
                <div class="modal-footer">
                    <br><button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button><br>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Deletar Erro -->
<div id="deletarErro" class="modal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <font color="red"><h5 class="modal-title">Erro</h5></font>
                <div class="modal-body">
                    <br><p>Erro ao deletar!<p><br>
                </div>
                <div class="modal-footer">
                    <br><button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button><br>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Logar Erro -->
<div id="errors" class="modal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <font color="red"><h5 class="modal-title">Erro</h5></font>
                <div class="modal-body">
                    <br><p style="color: black;">Erro ao logar!<p><br>
                </div>
                <div class="modal-footer">
                    <br><button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button><br>
                </div>
            </div>
        </div>
    </div>
</div>


<?php
if ($this->session->tempdata('msg') == 'true')
{
    ?>
    <script type="text/javascript"> 
      $('#sucesso').modal('show');
    </script>
    <?php
}
else if ($this->session->tempdata('msg') == 'err')
{
    ?>
    <script type="text/javascript"> 
      $('#err').modal('show');
    </script>
    <?php
}
else if ($this->session->tempdata('msg') == 'erroAtualizar')
{
    ?>
    <script type="text/javascript"> 
      $('#atualizarErro').modal('show');
    </script>
    <?php
}
else if ($this->session->tempdata('msg') == 'deletado')
{
    ?>
    <script type="text/javascript"> 
      $('#deletar').modal('show');
    </script>
    }
    <?php
}
else if ($this->session->tempdata('msg') == 'atualizado')
{
    ?>
    <script type="text/javascript"> 
      $('#atualizar').modal('show');
    </script>

    <?php
}
else if ($this->session->tempdata('msg') == 'erroDeletar')
{
    ?>
    <script type="text/javascript"> 
      $('#deletarErro').modal('show');
    </script>
    }
    <?php
}
else if ($this->session->userdata('logado') == 'err')
{
    ?>
    <script type="text/javascript"> 
      $('#errors').modal('show');
    </script>

    }
<?php } ?>

</body>
</html>