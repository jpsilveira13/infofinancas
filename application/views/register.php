<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Dynado | Register</title>

    <link href="<?php echo base_url()?>/assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url()?>/assets/font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="<?php echo base_url()?>/assets/css/plugins/iCheck/custom.css" rel="stylesheet">
    <link href="<?php echo base_url()?>/assets/css/animate.css" rel="stylesheet">
    <link href="<?php echo base_url()?>/assets/css/style.css" rel="stylesheet">

</head>

<body class="gray-bg">

<div class="middle-box text-center loginscreen  animated fadeInDown">
    <div>
        <div>

            <a href="<?php echo base_url()?>"> <img src="<?php echo base_url()?>assets/img/Logo - 2short.png" style="margin-left: -105px;"> </a>

        </div>
        <h3>Cadastre-se no Dynado.</h3>
        <p>Crie uma conta para usar o Dynado.</p>
        <form class="m-t" role="form" action="<?php echo base_url()?>login.html">
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Nome" required="">
            </div>
            <div class="form-group">
                <input type="email" class="form-control" placeholder="Email" required="">
            </div>
            <div class="form-group">
                <input type="password" class="form-control" placeholder="Senha" required="">
            </div>
            <div class="form-group">
                <div class="checkbox i-checks"><label> <input type="checkbox"><i></i> Eu concordo com os termos de uso. </label></div>
            </div>
            <button type="submit" class="btn btn-primary block full-width m-b">Cadastrar</button>

        </form>
        <p class="m-t"> <small>Dynado Finanças &copy; 2015</small> </p>
    </div>
</div>

<!-- Mainly scripts -->
<script src="<?php echo base_url()?>assets/js/jquery-2.1.1.js"></script>
<script src="<?php echo base_url()?>assets/js/bootstrap.min.js"></script>
<!-- iCheck -->
<script src="<?php echo base_url()?>assets/js/plugins/iCheck/icheck.min.js"></script>
<script>
    $(document).ready(function(){
        $('.i-checks').iCheck({
            checkboxClass: 'icheckbox_square-green',
            radioClass: 'iradio_square-green',
        });
    });
</script>
</body>

</html>
