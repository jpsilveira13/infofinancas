<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Dynado Finanças</title>

    <link href="<?php echo base_url()?>/assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url()?>/assets/font-awesome/css/font-awesome.css" rel="stylesheet">

    <!-- Toastr style -->
    <link href="<?php echo base_url()?>/assets/css/plugins/toastr/toastr.min.css" rel="stylesheet">

    <!-- Gritter -->
    <link href="<?php echo base_url()?>/assets/js/plugins/gritter/jquery.gritter.css" rel="stylesheet">

    <link href="<?php echo base_url()?>/assets/css/animate.css" rel="stylesheet">
    <link href="<?php echo base_url()?>/assets/css/style.css" rel="stylesheet">

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
                        <span><img alt="image" class="img-circle" src="<?php echo base_url()?>/assets/img/profile_small.jpg"/></span>

                        <!-- Dados Perfil -->
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="clear"> <span class="block m-t-xs"> <strong class="font-bold">Nome usuário</strong>
                             </span> <span class="text-muted text-xs block">Dados Perfil <b class="caret"></b></span> </span> </a>

                        <!-- Menu Perfil -->
                        <ul class="dropdown-menu animated fadeInRight m-t-xs">
                            <li><a href="assets/profile.html">Profile</a></li>
                            <li><a href="assets/contacts.html">Contacts</a></li>
                            <li><a href="assets/mailbox.html">Mailbox</a></li>
                            <li class="divider"></li>
                            <li><a href="assets/login.html">Logout</a></li>
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

                    <form role="search" class="navbar-form-custom" method="post" action="assets/search_results.html">
                        <div class="form-group">
                            <input type="text" placeholder="Search for something..." class="form-control"
                                   name="top-search" id="top-search">
                        </div>
                    </form>
                </div>
                <ul class="nav navbar-top-links navbar-right">
                    <li>
                        <span class="m-r-sm text-muted welcome-message">Welcome to INSPINIA+ Admin Theme.</span>
                    </li>
                    <li class="dropdown">
                        <a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
                            <i class="fa fa-envelope"></i> <span class="label label-warning">16</span>
                        </a>
                        <ul class="dropdown-menu dropdown-messages">
                            <li>
                                <div class="dropdown-messages-box">
                                    <a href="assets/profile.html" class="pull-left">
                                        <img alt="image" class="img-circle" src="<?php echo base_url()?>/assets/img/a7.jpg">
                                    </a>

                                    <div class="media-body">
                                        <small class="pull-right">46h ago</small>
                                        <strong>Mike Loreipsum</strong> started following <strong>Monica Smith</strong>.
                                        <br>
                                        <small class="text-muted">3 days ago at 7:58 pm - 10.06.2014</small>
                                    </div>
                                </div>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <div class="dropdown-messages-box">
                                    <a href="assets/profile.html" class="pull-left">
                                        <img alt="image" class="img-circle" src="<?php echo base_url()?>/assets/img/a4.jpg">
                                    </a>

                                    <div class="media-body ">
                                        <small class="pull-right text-navy">5h ago</small>
                                        <strong>Chris Johnatan Overtunk</strong> started following <strong>Monica
                                            Smith</strong>. <br>
                                        <small class="text-muted">Yesterday 1:21 pm - 11.06.2014</small>
                                    </div>
                                </div>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <div class="dropdown-messages-box">
                                    <a href="assets/profile.html" class="pull-left">
                                        <img alt="image" class="img-circle" src="<?php echo base_url()?>/assets/img/profile.jpg">
                                    </a>

                                    <div class="media-body ">
                                        <small class="pull-right">23h ago</small>
                                        <strong>Monica Smith</strong> love <strong>Kim Smith</strong>. <br>
                                        <small class="text-muted">2 days ago at 2:30 am - 11.06.2014</small>
                                    </div>
                                </div>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <div class="text-center link-block">
                                    <a href="assets/mailbox.html">
                                        <i class="fa fa-envelope"></i> <strong>Read All Messages</strong>
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
                            <i class="fa fa-bell"></i> <span class="label label-primary">8</span>
                        </a>
                        <ul class="dropdown-menu dropdown-alerts">
                            <li>
                                <a href="assets/mailbox.html">
                                    <div>
                                        <i class="fa fa-envelope fa-fw"></i> You have 16 messages
                                        <span class="pull-right text-muted small">4 minutes ago</span>
                                    </div>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="assets/profile.html">
                                    <div>
                                        <i class="fa fa-twitter fa-fw"></i> 3 New Followers
                                        <span class="pull-right text-muted small">12 minutes ago</span>
                                    </div>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="assets/grid_options.html">
                                    <div>
                                        <i class="fa fa-upload fa-fw"></i> Server Rebooted
                                        <span class="pull-right text-muted small">4 minutes ago</span>
                                    </div>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <div class="text-center link-block">
                                    <a href="assets/notifications.html">
                                        <strong>See All Alerts</strong>
                                        <i class="fa fa-angle-right"></i>
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </li>


                    <li>
                        <a href="assets/login.html">
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
<script src="<?php echo base_url()?>/assets/js/jquery-2.1.1.js"></script>
<script src="<?php echo base_url()?>/assets/js/bootstrap.min.js"></script>
<script src="<?php echo base_url()?>/assets/js/plugins/metisMenu/jquery.metisMenu.js"></script>
<script src="<?php echo base_url()?>/assets/js/plugins/slimscroll/jquery.slimscroll.min.js"></script>

<!-- Flot -->
<script src="<?php echo base_url()?>/assets/js/plugins/flot/jquery.flot.js"></script>
<script src="<?php echo base_url()?>/assets/js/plugins/flot/jquery.flot.tooltip.min.js"></script>
<script src="<?php echo base_url()?>/assets/js/plugins/flot/jquery.flot.spline.js"></script>
<script src="<?php echo base_url()?>/assets/js/plugins/flot/jquery.flot.resize.js"></script>
<script src="<?php echo base_url()?>/assets/js/plugins/flot/jquery.flot.pie.js"></script>

<!-- Peity -->
<script src="<?php echo base_url()?>/assets/js/plugins/peity/jquery.peity.min.js"></script>
<script src="<?php echo base_url()?>/assets/js/demo/peity-demo.js"></script>

<!-- Custom and plugin javascript -->
<script src="<?php echo base_url()?>/assets/js/inspinia.js"></script>
<script src="<?php echo base_url()?>/assets/js/plugins/pace/pace.min.js"></script>

<!-- jQuery UI -->
<script src="<?php echo base_url()?>/assets/js/plugins/jquery-ui/jquery-ui.min.js"></script>

<!-- GITTER -->
<script src="<?php echo base_url()?>/assets/js/plugins/gritter/jquery.gritter.min.js"></script>

<!-- Sparkline -->
<script src="<?php echo base_url()?>/assets/js/plugins/sparkline/jquery.sparkline.min.js"></script>

<!-- Sparkline demo data  -->
<script src="<?php echo base_url()?>/assets/js/demo/sparkline-demo.js"></script>

<!-- ChartJS-->
<script src="<?php echo base_url()?>/assets/js/plugins/chartJs/Chart.min.js"></script>

<!-- Toastr -->
<script src="<?php echo base_url()?>/assets/js/plugins/toastr/toastr.min.js"></script>


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
