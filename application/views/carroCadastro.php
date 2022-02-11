<body style="background-color: #DCDCDC;">
<font face="Segoe Print"><h1>Cadastro de Carro</h1></font>
<?php echo form_open('carro/inserir'); ?>
<label>Proprietário</label>
<select class="form-control" name="idPessoa" id="idPessoa">
    <option value="">Proprietário</option>
    <?php foreach ($pessoas as $pes): ?>
        <option value="<?php echo $pes->idPessoa; ?>"><?php echo $pes->nome; ?></option>
    <?php endforeach; ?>
</select>
<br><br>
<label>Modelo</label>
<input class="form-control" type="text" required name="modelo" placeholder="Modelo do carro aqui..." />
<br><br>
<label>Marca</label>
<input class="form-control" type="text" required name="marca" placeholder="Marca do carro aqui..." />
<br><br>
<label>Nº de portas</label>
<input class="form-control" type="number" required name="portas" placeholder="Quantidade de portas aqui..." />
<br><br>
<label>Cor</label>
<input class="form-control" type="color" required name="cor" placeholder="Cor do seu carro aqui..." />
<br><br>
<label>Placa</label>
<input class="form-control" type="text" name="placa" placeholder="Placa do seu carro aqui..." />
<br><br>
<input class="btn btn-outline-success" type="submit" value="Salvar"/>
<input class="btn btn-outline-danger" type="reset" value="Limpar"/>
<?php echo form_close(); ?>
<h2>Lista Carros</h2>
<table class="table">
   <thead class="thead-light">
        <tr>
            <th>Modelo</th><th>Marca</th><th>Placa</th><th>Nº de portas</th><th>Cor</th><th>Proprietário</th> <th>Funções</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($carros as $car): ?>
            <tr>
                <td><?php echo $car->modelo; ?></td>
                <td><?php echo $car->marca; ?></td>
                <td><?php echo $car->placa; ?></td>
                <td><?php echo $car->portas; ?></td>
                <td><input type="color" disabled value="<?php echo $car->cor ?>"/></td>
                <td><?php
                    foreach ($pessoas as $pes):
                        if ($car->idPessoa == $pes->idPessoa)
                        {
                            echo $pes->nome;
                            break;
                        }endforeach;
                    ?></td>
                <td>
                    <a href="<?php
                    echo base_url() .
                    'carro/editar/' .
                    $car->idCarro;
                    ?>">Editar</a> | 
                    <?php if  ($this->session->userdata('logado')->perfilAcesso!='user') {?>
                            <a href="<?php echo base_url() . 
                                    'carro/excluir/' . 
                                    $car->idCarro; ?>">Deletar</a>
                            <?php } ?>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
</body>
