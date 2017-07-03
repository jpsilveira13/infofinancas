<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Info Finanças | Registro</title>

    <link href="<?php echo base_url()?>/assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url()?>/assets/font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="<?php echo base_url()?>/assets/css/plugins/iCheck/custom.css" rel="stylesheet">
    <link href="<?php echo base_url()?>/assets/css/animate.css" rel="stylesheet">
    <link href="<?php echo base_url()?>/assets/css/style.css" rel="stylesheet">

    <!-- Toastr style -->
    <link href="<?php echo base_url() ?>/assets/css/plugins/toastr/toastr.min.css" rel="stylesheet">

    <!-- Gritter -->
    <link href="<?php echo base_url() ?>/assets/js/plugins/gritter/jquery.gritter.css" rel="stylesheet">

    <!-- DataPicker -->
    <link href="<?php echo base_url() ?>/assets/css/plugins/datapicker/datepicker3.css" rel="stylesheet">

</head>

<body>

<div class="middle-box text-center loginscreen  animated fadeInDown">
    <div>
        <div>

            <a href="<?php echo base_url()?>"> <img src="<?php echo base_url()?>assets/img/Logo - 2short.png" style="margin-left: -105px;"> </a>

        </div>
        <h3>Cadastre-se no Info.</h3>
        <p>Crie uma conta para usar acessar o sistema.</p>
        <form class="m-t" role="form" action="<?php echo base_url()?>HomeController/criarConta" method="post">
            <div class="form-group">
                <input name="nome" type="text" class="form-control" placeholder="Nome" required="">
            </div>
            <div class="form-group">
                <input name="email" type="email" class="form-control" placeholder="Email" required="">
            </div>
            <div class="form-group">
                <input name="senha" type="password" class="form-control" placeholder="Senha" required="">
            </div>
            <div class="form-group">
                <div class="checkbox i-checks"><label> <input type="checkbox"><i></i> Eu concordo com os termos de uso. </label></div>
            </div>
            <button type="submit" class="btn btn-primary block full-width m-b">Cadastrar</button>

        </form>
        <p class="m-t"> <small>Info Finanças &copy; 2017</small> </p>
    </div>
</div>

<!-- Mainly scripts -->
<script src="<?php echo base_url() ?>/assets/js/jquery-2.1.1.js"></script>
<script src="<?php echo base_url() ?>/assets/js/bootstrap.min.js"></script>
<script src="<?php echo base_url() ?>/assets/js/plugins/metisMenu/jquery.metisMenu.js"></script>
<script src="<?php echo base_url() ?>/assets/js/plugins/slimscroll/jquery.slimscroll.min.js"></script>

<!-- Toastr -->
<script src="<?php echo base_url() ?>/assets/js/plugins/toastr/toastr.min.js"></script>

<!-- Flot -->
<script src="<?php echo base_url() ?>/assets/js/plugins/flot/jquery.flot.js"></script>
<script src="<?php echo base_url() ?>/assets/js/plugins/flot/jquery.flot.tooltip.min.js"></script>
<script src="<?php echo base_url() ?>/assets/js/plugins/flot/jquery.flot.spline.js"></script>
<script src="<?php echo base_url() ?>/assets/js/plugins/flot/jquery.flot.resize.js"></script>
<script src="<?php echo base_url() ?>/assets/js/plugins/flot/jquery.flot.pie.js"></script>

<!-- Peity -->
<script src="<?php echo base_url() ?>/assets/js/plugins/peity/jquery.peity.min.js"></script>
<script src="<?php echo base_url() ?>/assets/js/demo/peity-demo.js"></script>

<!-- Custom and plugin javascript -->
<script src="<?php echo base_url() ?>/assets/js/inspinia.js"></script>
<script src="<?php echo base_url() ?>/assets/js/plugins/pace/pace.min.js"></script>

<!-- jQuery UI -->
<script src="<?php echo base_url() ?>/assets/js/plugins/jquery-ui/jquery-ui.min.js"></script>

<!-- GITTER -->
<script src="<?php echo base_url() ?>/assets/js/plugins/gritter/jquery.gritter.min.js"></script>

<!-- Sparkline -->
<script src="<?php echo base_url() ?>/assets/js/plugins/sparkline/jquery.sparkline.min.js"></script>

<!-- Sparkline demo data  -->
<script src="<?php echo base_url() ?>/assets/js/demo/sparkline-demo.js"></script>

<!-- ChartJS-->
<script src="<?php echo base_url() ?>/assets/js/plugins/chartJs/Chart.min.js"></script>

<!-- DataPicker -->
<script src="<?php echo base_url() ?>/assets/js/plugins/datapicker/bootstrap-datepicker.js"></script>

<!-- iCheck -->
<script src="<?php echo base_url()?>assets/js/plugins/iCheck/icheck.min.js"></script>

<div id="idDiv" style="display:none"><?php echo $response;?></div>

<script>
    $(document).ready(function(){
        var $response = JSON.parse($('#idDiv').html());
        //para ver os dados e testar se deu certo use o console.log:
        console.log($response);

        setTimeout(function () {
            toastr.options = {
                closeButton: true,
                progressBar: true,
                showMethod: 'slideDown',
                timeOut: 5000
            };

            if($response.status == 'SUCCESS'){
                toastr.success($response.message, $response.title);
            }

            if($response.status == 'ERROR'){
                toastr.error($response.message, $response.title);
            }

        }, 1300);

        $('.i-checks').iCheck({
            checkboxClass: 'icheckbox_square-green',
            radioClass: 'iradio_square-green'
        });
    });
</script>
</body>

</html>
