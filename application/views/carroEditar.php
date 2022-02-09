<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        | <a class="linkdescr" href="<?php echo base_url() . 'carro'; ?>">Voltar</a>
        <h1>Editar Carro</h1>
        <label>Proprietário</label>
        <?php echo form_open('carro/atualizar'); ?>
        <select name="idPessoa" id="idPessoa">
            <option value="">Proprietário</option>
            <?php foreach ($pessoas as $pes): ?>
                <option value="<?php echo $pes->idPessoa; ?>"
                <?php
                if ($pes->idPessoa == $carro[0]->idPessoa)
                {
                    echo 'selected';
                }
                ?>
                        >
                    <?php echo $pes->nome; ?></option>
            <?php endforeach; ?>
            <br><br>
            <input type="hidden" required name="idCarro" value="<?php echo $carro[0]->idCarro; ?>" />
            <br><br>
            <label>Modelo</label>
            <input class="form-control" type="text" required name="modelo" value="<?php echo $carro[0]->modelo; ?>" />
            <br><br>
            <label>Marca</label>
            <input class="form-control" type="text" required name="marca" value="<?php echo $carro[0]->marca; ?>" />
            <br><br>
            <label>Nº de portas</label>
            <input class="form-control" type="number" required name="portas" value="<?php echo $carro[0]->portas; ?>" />
            <br><br>
            <label>Cor</label>
            <input class="form-control" type="color" required name="cor" value="<?php echo $carro[0]->cor; ?>" />
            <br><br>
            <label>Placa</label>
            <input class="form-control" type="text" name="placa" value="<?php echo $carro[0]->placa; ?>" />
            <br><br>
            <input class="btn-outline-success" type="submit" value="Salvar"/>
            <?php echo form_close(); ?>
    </body>
</html>
