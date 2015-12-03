<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Dynado | Cadastro</title>

    <link href="http://localhost/dynado-financas/assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="http://localhost/dynado-financas/assets/font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="http://localhost/dynado-financas/assets/css/plugins/iCheck/custom.css" rel="stylesheet">
    <link href="http://localhost/dynado-financas/assets/css/animate.css" rel="stylesheet">
    <link href="http://localhost/dynado-financas/assets/css/style.css" rel="stylesheet">

</head>

<body class="gray-bg">

<div class="middle-box text-center loginscreen   animated fadeInDown">
    <div>
        <div>

            <h1 class="logo-name">DF</h1>

        </div>
        <h3>Registre-se no Dynado Finanças</h3>
        <p>Crie uma conta para ter acesso</p>
        <form class="m-t" role="form" action="login.html">
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
                <div class="checkbox i-checks"><label> <input type="checkbox"><i></i> Eu concordo com os termos danados </label></div>
            </div>
            <button type="submit" class="btn btn-primary block full-width m-b">Cadastrar</button>

            <!-- <p class="text-muted text-center"><small>Already have an account?</small></p>
            <a class="btn btn-sm btn-white btn-block" href="login.html">Login</a> -->
        </form>
        <p class="m-t"> <small>Dynado Finanças &copy; 2015</small> </p>
    </div>
</div>

<!-- Mainly scripts -->
<script href="http://localhost/dynado-financas/assets/js/jquery-2.1.1.js"></script>
<script href="http://localhost/dynado-financas/assets/js/bootstrap.min.js"></script>
<!-- iCheck -->
<script href="http://localhost/dynado-financas/assets/js/plugins/iCheck/icheck.min.js"></script>
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
