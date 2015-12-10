<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Dynado | Login</title>

    <link href="<?php echo base_url() ?>/assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>/assets/font-awesome/css/font-awesome.css" rel="stylesheet">

    <link href="<?php echo base_url() ?>/assets/css/animate.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>/assets/css/style.css" rel="stylesheet">

</head>

<body class="gray-bg">

<div class="middle-box text-center loginscreen  animated fadeInDown">
    <div>
        <div>

            <img src="<?php echo base_url() ?>assets/img/Logo - 2short.png" style="margin-left: -105px;">

        </div>
        <h3>Bem vindo ao Dyando Finanças</h3>

        <p>
            Um lugar para controlar seus gastos de forma efetiva e administrar o seu dinheiro.
            <!--Continually expanded and constantly improved Inspinia Admin Them (IN+)-->
        </p>

        <p>Começe agora.</p>

        <form class="m-t" role="form" action="<?php echo base_url() ?>HomeController/login" method="post">
            <div class="form-group">
                <input type="email" class="form-control" placeholder="Email" required="" name="email">
            </div>
            <div class="form-group">
                <input type="password" class="form-control" placeholder="Senha" required="" name="senha">
            </div>
            <button type="submit" class="btn btn-primary block full-width m-b">Entrar</button>

            <a href="#">
                <small>Esqueci minha senha.</small>
            </a>

            <p class="text-muted text-center">
                <small>Não tem conta?</small>
            </p>
            <a class="btn btn-sm btn-white btn-block" href="<?php echo base_url() ?>HomeController/registrar">Cadastre-se</a>
        </form>
        <p class="m-t">
            <small>Dynado Finanças &copy; 2015</small>
        </p>
    </div>
</div>

<!-- Mainly scripts -->
<script src="<?php echo base_url() ?>/assets/js/jquery-2.1.1.js"></script>
<script src="<?php echo base_url() ?>/assets/js/bootstrap.min.js"></script>


</body>

</html>
