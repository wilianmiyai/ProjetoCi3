<!DOCTYPE HTML>
<html>
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>">
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    </head>
    <body>
        <div class="container">
            <font color="DeepSkyBlue">
            <?php
            if ($this->session->userdata('estou_logado')) {
                echo $this->session->userdata('logado')->nomeUsuario;
                ?>
                  </font>
                | 
                <a href="<?php echo base_url(); ?>login/sair">Sair</a> | 
                <a href="<?php echo base_url() . 'home'; ?>">Home</a> | 
                <a href="<?php echo base_url(); ?>pessoa">Pessoa</a> | 
                <a href="<?php echo base_url(); ?>usuario">Usuário</a> |
                <a href="<?php echo base_url(); ?>carro">Carro</a>
            <?php }
            ?>