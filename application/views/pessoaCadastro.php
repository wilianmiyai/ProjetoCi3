<body style="background-color: MintCream;">
    <font face="Segoe Print"><h1>Cadastro de Pessoa</h1></font>
<?php echo form_open('pessoa/inserir'); ?>
<label>Nome :</label>
<input class="form-control" type="text" required name="nome" placeholder="Nome aqui..." />
<br><br>
<laber>Telefone :</laber>
<input class="form-control" type="text" required name="telefone" placeholder="Telefone aqui..." />
<br><br>
<laber>E-mail :</laber>
<input class="form-control" type="email" required name="email" placeholder="E-mail aqui..." />
<br><br>
<laber>Endereço :</laber>
<input class="form-control" type="text" required name="endereco" placeholder="Endereço aqui..." />
<br><br>
<input class="form-check-inline" type="radio" required name="tpPessoa" value="Fisica"/>Fisíca 
<input class="form-check-inline" type="radio" required name="tpPessoa" value="Juridica" />Jurídica
<br><br>
<laber>CPF :</laber>
<input class="form-control" type="number" name="cpf" placeholder="CPF aqui..." />
<br><br>
<input class="form-check-inline" type="radio" name="sexo" value="F"/>Feminino 
<input class="form-check-inline" type="radio" name="sexo" value="M" />Masculino
<br><br>
<laber>CNPJ :</laber>
<input class="form-control" type="number" name="cnpj" placeholder="CNPJ aqui..." />
<br><br>
<laber>Nome Fantasia :</laber>
<input class="form-control" type="text" name="nomeFantasia" placeholder="Nome Fantasia aqui..." />
<br><br>
<input class="btn btn-outline-success" type="submit" value="Salvar"/>
<input class="btn btn-outline-danger" type="reset" value="Limpar"/>
<?php echo form_close(); ?>
</body>
<h2>Lista Pessoas</h2>
<table class="table">
   <thead class="thead-light">
        <tr>
            <th>Nome</th><th>Telefone</th><th>E-mail</th><th>Funções</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($pessoas as $pes): ?>
            <tr>
                <td><?php echo $pes->nome; ?></td>
                <td><?php echo $pes->telefone; ?></td>
                <td><?php echo $pes->email; ?></td>
                <td>
                    <a href="<?php
                    echo base_url() .
                    'pessoa/editar/' .
                    $pes->idPessoa;
                    ?>">Editar</a> |             
                        <?php if  ($this->session->userdata('logado')->perfilAcesso!='user') {?>
                            <a href="<?php echo base_url() . 
                                    'pessoa/excluir/' . 
                                    $pes->idPessoa; ?>">Deletar</a>
                            <?php } ?>
                </td>
            </tr>
<?php endforeach; ?>
    </tbody>
</table>
