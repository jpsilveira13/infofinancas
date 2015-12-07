<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Dynado Finanças</title>

    <link href="<?php echo base_url() ?>/assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>/assets/font-awesome/css/font-awesome.css" rel="stylesheet">

    <!-- Toastr style -->
    <link href="<?php echo base_url() ?>/assets/css/plugins/toastr/toastr.min.css" rel="stylesheet">

    <!-- Gritter -->
    <link href="<?php echo base_url() ?>/assets/js/plugins/gritter/jquery.gritter.css" rel="stylesheet">

    <link href="<?php echo base_url() ?>/assets/css/animate.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>/assets/css/style.css" rel="stylesheet">

</head>

<body>
<div id="wrapper">

    <!-- Menu Lateral -->
    <nav class="navbar-default navbar-static-side" role="navigation">
        <div class="sidebar-collapse">

            <ul class="nav" id="side-menu">

                <li class="nav-header">
                    <div class="dropdown profile-element">

                        <!-- Foto Perfil -->
                        <span><img alt="image" class="img-circle"
                                   src="<?php echo base_url() ?>/assets/img/profile_small.png"/></span>

                        <!-- Dados Perfil -->
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="clear"> <span class="block m-t-xs"> <strong class="font-bold">Nome
                                        usuário</strong>
                             </span> <span class="text-muted text-xs block">Dados Perfil <b
                                        class="caret"></b></span> </span> </a>

                        <!-- Menu Perfil -->
                        <ul class="dropdown-menu animated fadeInRight m-t-xs">
                            <li><a href="<?php echo base_url() ?>assets/profile.html">Profile</a></li>
                            <li><a href="<?php echo base_url() ?>assets/contacts.html">Contacts</a></li>
                            <li><a href="<?php echo base_url() ?>assets/mailbox.html">Mailbox</a></li>
                            <li class="divider"></li>
                            <li><a href="<?php echo base_url() ?>">Logout</a></li>
                        </ul>

                    </div>
                </li>

                <li>
                    <!-- Calendario aqui -->
                </li>

            </ul>

        </div>
    </nav>

    <!-- Dashboard -->
    <div id="page-wrapper" class="gray-bg">

        <!-- Menu Topo -->
        <div class="row border-bottom white-bg">
            <nav class="navbar navbar-static-top" role="navigation" style="margin-bottom: 0">
                <div class="navbar-header">
                    <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-bars"></i>
                    </a>


                </div>
                <ul class="nav navbar-top-links navbar-right">

                    <!-- Sair -->
                    <li>
                        <a href="<?php echo base_url() ?>">
                            <i class="fa fa-sign-out"></i> Log out
                        </a>
                    </li>

                </ul>

            </nav>
        </div>

        <div class="row">
            <div class="col-lg-12">

                <div class="wrapper wrapper-content">
                    <div class="row">

                        <!-- Despesas -->
                        <div class="col-lg-3">
                            <div class="ibox float-e-margins">

                                <div class="ibox-title">
                                    <h5>Despesas</h5>
                                </div>

                                <div class="ibox-content">
                                    <!-- despesas aqui-->
                                </div>

                            </div>
                        </div>

                        <!-- Fluxo de Caixa -->
                        <div class="col-lg-6">
                            <div class="ibox float-e-margins">

                                <div class="ibox-title">
                                    <h5>Fluxo de Caixa</h5>
                                </div>

                                <div class="ibox-content">
                                    <!-- fluxo de caixa aqui-->

                                    <div class="ibox float-e-margins">
                                        <div>
                                            <div>
                                                <canvas id="lineChart" height="140"></canvas>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                            </div>
                        </div>

                        <!-- Entradas -->
                        <div class="col-lg-3">
                            <div class="ibox float-e-margins">

                                <div class="ibox-title">
                                    <h5>Entradas</h5>
                                </div>

                                <div class="ibox-content">
                                    <!-- entradas aqui-->
                                </div>

                            </div>
                        </div>

                    </div>

                    <!-- Movimentações -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="ibox float-e-margins">

                                <div class="ibox-title">
                                    <h5>Movimentações</h5>
                                </div>

                                <div class="ibox-content">
                                    <!-- movimentações aqui-->
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="footer">
                    <div class="pull-right">
                        Controle de Finanças
                    </div>
                    <div>
                        <strong>Copyright</strong> Desenvolvimento de Aplicações Web &copy; 2015
                    </div>
                </div>

            </div>
        </div>

    </div>

</div>

<!-- Mainly scripts -->
<script src="<?php echo base_url() ?>/assets/js/jquery-2.1.1.js"></script>
<script src="<?php echo base_url() ?>/assets/js/bootstrap.min.js"></script>
<script src="<?php echo base_url() ?>/assets/js/plugins/metisMenu/jquery.metisMenu.js"></script>
<script src="<?php echo base_url() ?>/assets/js/plugins/slimscroll/jquery.slimscroll.min.js"></script>

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
<script src="<?php echo base_url() ?>/assets/js/demo/graficoMensal.js"></script>

<!-- Toastr -->
<script src="<?php echo base_url() ?>/assets/js/plugins/toastr/toastr.min.js"></script>


<script>
    $(document).ready(function () {
        setTimeout(function () {
            toastr.options = {
                closeButton: true,
                progressBar: true,
                showMethod: 'slideDown',
                timeOut: 5000
            };
            toastr.success('Controle de Finanças', 'Bem vindo ao Dynado');

        }, 1300);
    });
</script>
</body>
</html>
