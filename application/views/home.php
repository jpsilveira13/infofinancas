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
    <div id="page-wrapper" class="gray-bg" Style="min-height: 100px">

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
            <div class="row">

                <!-- Despesas -->
                <div class="col-lg-3">
                    <div class="ibox float-e-margins">

                        <div class="ibox-title">
                            <h5>Despesas</h5>
                        </div>

                        <div class="ibox-content no-padding">
                            <ul class="list-group">

                                <?php
                                $count = 0;
                                foreach ($movimentacoes as $i => $movimentacao) {
                                    if ($movimentacao->tipo == 'DESPESA' && $count < 5) {
                                        echo
                                            '
                                            <li class="list-group-item">
                                                <p>
                                                    <strong>' . $movimentacao->nome . '</strong>
                                                    <span class="label label-danger pull-right"> R$' . $movimentacao->valor . '</span>
                                                </p>
                                                <small class="block text-muted"><i class="fa fa-clock-o"></i>' . $movimentacao->vencimento . '</small>
                                            </li>
                                            ';
                                        $count++;
                                    }
                                }
                                ?>

                            </ul>
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

                            <div class="ibox float-e-margins">
                                <div>
                                    <div>
                                        <canvas id="lineChart" height="140"></canvas>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-12">
                                    <form action="<?php echo base_url() ?>MovimentacaoController">
                                        <input type="submit" value="Nova Movimentação"
                                               class="form-control btn btn-w-m btn-primary">
                                    </form>
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

                        <div class="ibox-content no-padding">
                            <ul class="list-group">
                                <?php
                                $count = 0;
                                foreach ($movimentacoes as $movimentacao) {
                                    if ($movimentacao->tipo == 'ENTRADA' && $count < 5) {
                                        echo
                                            '
                                            <li class="list-group-item">
                                                <p>
                                                    <strong>' . $movimentacao->nome . '</strong>
                                                    <span class="label label-info pull-right"> R$' . $movimentacao->valor . '</span>
                                                </p>
                                                <small class="block text-muted"><i class="fa fa-clock-o"></i>' . $movimentacao->vencimento . '</small>
                                            </li>
                                            ';
                                        $count++;
                                    }
                                }
                                ?>
                            </ul>
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

                            <table class="table">

                                <thead>
                                <tr>
                                    <th>Movimentação</th>
                                    <th>Nome</th>
                                    <th>Descrição</th>
                                    <th>Valor</th>
                                    <th>Vencimento</th>
                                    <th>Ações</th>
                                </tr>
                                </thead>

                                <tbody>

                                <?php
                                $count = 0;
                                foreach ($movimentacoes as $movimentacao) {
                                    if($movimentacao->tipo == 'DESPESA'){
                                        $tipo = "danger";
                                    } else {
                                        $tipo = "info";
                                    }
                                    echo
                                        '
                                        <tr>
                                            <td><span class="label label-' . $tipo . '">' . $movimentacao->tipo . '</span></td>
                                            <td>' . $movimentacao->nome . '</td>
                                            <td>' . $movimentacao->descricao . '</td>
                                            <td>R$ ' . $movimentacao->valor . '</td>
                                            <td>' . $movimentacao->vencimento . '</td>
                                            <td width="10px">
                                                <div class="form-group">
                                                    <div class="col-lg-6">
                                                        <form action="' . base_url() . 'MovimentacaoController/delete" method="POST">
                                                            <input type="hidden" name="id" value="' . $movimentacao->id . '">
                                                            <input type="submit" value="Excluir" class="btn btn-white btn-sm">
                                                        </form>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        ';
                                }
                                ?>

                                </tbody>

                            </table>

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

        $('#data_1 .input-group.date').datepicker({
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


        var lineData = {
            labels: ["Janeiro", "Fevereiro", "Março", "Abril", "Maio", "Junho", "Julho", "Agosto", "Setembro", "Outubro", "Novembro", "Dezembro"],
            datasets: [
                {
                    label: "Example dataset",
                    fillColor: "rgba(225,0,0,0.1)",//"rgba(220,220,220,0.5)",
                    strokeColor: "rgba(220,220,220,1)",
                    pointColor: "rgba(220,220,220,1)",
                    pointStrokeColor: "#fff",
                    pointHighlightFill: "#fff",
                    pointHighlightStroke: "rgba(220,220,220,1)",
                    data: [27, 90, 28, 48, 40, 19, 40, 19, 86, 27, 19, 86]
                },
                {
                    label: "Example dataset",
                    fillColor: "rgba(26,179,148,0.5)",
                    strokeColor: "rgba(26,179,148,0.7)",
                    pointColor: "rgba(26,179,148,1)",
                    pointStrokeColor: "#fff",
                    pointHighlightFill: "#fff",
                    pointHighlightStroke: "rgba(26,179,148,1)",
                    data: [28, 48, 40, 19, 86, 27, 90, 28, 48, 40, 19, 86]
                }
            ]
        };

        var lineOptions = {
            scaleShowGridLines: true,
            scaleGridLineColor: "rgba(0,0,0,.05)",
            scaleGridLineWidth: 1,
            bezierCurve: true,
            bezierCurveTension: 0.4,
            pointDot: true,
            pointDotRadius: 4,
            pointDotStrokeWidth: 1,
            pointHitDetectionRadius: 20,
            datasetStroke: true,
            datasetStrokeWidth: 2,
            datasetFill: true,
            responsive: true,
        };


        var ctx = document.getElementById("lineChart").getContext("2d");
        var myNewChart = new Chart(ctx).Line(lineData, lineOptions);
    });

</script>

</body>
</html>
