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

    <!-- DataPicker -->
    <link href="<?php echo base_url() ?>/assets/css/plugins/datapicker/datepicker3.css" rel="stylesheet">

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
                            <span class="clear">
                                <span class="block m-t-xs">
                                    <strong class="font-bold">
                                        <?php echo $this->session->userdata('nome') ?><!-- pegando valor da session -->
                                    </strong>
                             </span> <span class="text-muted text-xs block">Dados Perfil <b
                                        class="caret"></b></span> </span> </a>

                        <!-- Menu Perfil -->
                        <ul class="dropdown-menu animated fadeInRight m-t-xs">
                            <li><a href="<?php echo base_url() ?>ProfileController">Perfil</a></li>
                            <li class="divider"></li>
                            <li><a href="<?php echo base_url() ?>HomeController/logout">Sair</a></li>
                        </ul>

                    </div>
                    <div class="logo-element">
                        <i class="fa fa-calculator"></i>
                    </div>
                </li>

                <li>
                    <!-- Calendario aqui -->
                </li>

                <li class="active">
                    <a href="<?php echo base_url() ?>HomeController/index?"><i class="fa fa-home"></i> <span
                            class="nav-label">Página Inicial</span></a>
                </li>

            </ul>

        </div>
    </nav>

    <!-- Dashboard -->
    <div id="page-wrapper" class="gray-bg" Style="min-height: 1000px">

        <!-- Menu Topo -->
        <div class="row border-bottom white-bg">
            <nav class="navbar navbar-static-top" role="navigation" style="margin-bottom: 0">
                <div class="navbar-header">
                    <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-bars"></i>
                    </a>
                </div>

                <ul class="nav navbar-top-links navbar-left">
                    <li>
                        <a href="<?php echo base_url() ?>HomeController/index?">
                            Dynado Finanças
                        </a>
                    </li>
                </ul>

                <ul class="nav navbar-top-links navbar-right">


                    <!-- Sair -->
                    <li>
                        <a href="<?php echo base_url() ?>HomeController/logout">
                            <i class="fa fa-sign-out"></i> Sair
                        </a>
                    </li>

                </ul>

            </nav>
        </div>

        <!-- Dashboard -->
        <div class="wrapper wrapper-content">

            <!-- Formulario -->
            <div class="row">
                <div class="col-lg-12">

                    <!-- FormValidation Message -->
                    <?php if (validation_errors()) {
                        echo '<div class="alert alert-danger">' . validation_errors() . '</div>';
                    } ?>

                    <div class="ibox float-e-margins">

                        <div class="ibox-title">
                            <h5>Cadastrar Movimentação</h5>
                        </div>

                        <div class="ibox-content">

                            <form action="<?php echo base_url() ?>MovimentacaoController" method="post"
                                  class="form-horizontal">

                                <!-- nome -->
                                <div class="form-group">
                                    <label class="col-lg-2 control-label">Nome *</label>

                                    <div class="col-lg-10">
                                        <input name="nome" type="text" placeholder="Nome" class="form-control">
                                    </div>
                                </div>

                                <!-- descricao -->
                                <div class="form-group">
                                    <label class="col-lg-2 control-label">Descrição *</label>

                                    <div class="col-lg-10">
                                        <input name="descricao" type="text" placeholder="Descricao"
                                               class="form-control">
                                    </div>
                                </div>

                                <div class="form-group">

                                    <!-- tipo -->
                                    <label class="col-lg-2 control-label">Tipo *</label>

                                    <div class="col-lg-4">
                                        <select name="tipo" class="form-control">
                                            <option value="DESPESA">DESPESA</option>
                                            <option value="ENTRADA">ENTRADA</option>
                                        </select>
                                    </div>

                                    <!-- vencimento -->
                                    <label class="col-lg-2 control-label">Vencimento *</label>

                                    <div class="col-lg-4">
                                        <div class="input-group date">
                                                <span class="input-group-addon">
                                                    <i class="fa fa-calendar"></i>
                                                </span>
                                            <input type="data" name="vencimento" class="form-control" value="03/04/2014"
                                                   id="vencimento">
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">

                                    <!-- valor -->
                                    <label class="col-lg-2 control-label">Valor *</label>

                                    <div class="col-lg-2">
                                        <input name="valor" type="text" placeholder="Valor" class="form-control">
                                    </div>

                                    <!-- frequencia -->
                                    <label class="col-lg-2 control-label">Frequência *</label>

                                    <div class="col-lg-2">
                                        <select name="frequencia" class="form-control">
                                            <option value="1">1 dia</option>
                                            <option value="7">7 dias</option>
                                            <option value="15">15 dias</option>
                                            <option value="30">30 dias</option>
                                        </select>
                                    </div>

                                    <!-- parcelas -->
                                    <label class="col-lg-2 control-label">Parcelas *</label>

                                    <div class="col-lg-2">
                                        <input name="parcelas" type="text" placeholder="Parcelas"
                                               class="form-control">
                                    </div>

                                </div>

                                <!-- botões -->
                                <div class="col-lg-12">
                                    <div class="pull-right">
                                        <div class="form-group">
                                            <button type="button" class="btn btn-white" data-dismiss="modal">Cancelar
                                            </button>
                                            <button class="btn btn-primary" type="submit">Salvar</button>
                                        </div>
                                    </div>
                                </div>

                                <br/>
                                <br/>
                            </form>

                        </div>

                        <div class="ibox-content"></div>

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

<div id="idDiv" style="display:none"><?php echo $response;?></div>

<script>

    $(document).ready(function () {
        var $response = JSON.parse($('#idDiv').html());
        //para ver os dados e testar se deu certo use o console.log:
        console.log($response);

        $('#vencimento').datepicker({
            todayBtn: "linked",
            keyboardNavigation: false,
            forceParse: false,
            calendarWeeks: true,
            autoclose: true
        });

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
    });

</script>

</body>
</html>
