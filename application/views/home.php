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
                            <li><a href="<?php echo base_url() ?>HomeController/index?">Perfil</a></li>
                            <li class="divider"></li>
                            <li><a href="<?php echo base_url() ?>">Logout</a></li>
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
                        <a href="<?php echo base_url() ?>">
                            <i class="fa fa-sign-out"></i> Log out
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
                                <li class="list-group-item">
                                    <p>
                                        <strong>Cartão de Crédito</strong>
                                        <span class="label label-danger pull-right"> R$ 250,00</span>
                                    </p>
                                    <small class="block text-muted"><i class="fa fa-clock-o"></i> 08/12/2015</small>
                                </li>
                                <li class="list-group-item">
                                    <p>
                                        <strong>Cartão de Crédito</strong>
                                        <span class="label label-danger pull-right"> R$ 250,00</span>
                                    </p>
                                    <small class="block text-muted"><i class="fa fa-clock-o"></i> 09/12/2015</small>
                                </li>
                                <li class="list-group-item">
                                    <p>
                                        <strong>Cartão de Crédito</strong>
                                        <span class="label label-danger pull-right"> R$ 250,00</span>
                                    </p>
                                    <small class="block text-muted"><i class="fa fa-clock-o"></i> 10/12/2015</small>
                                </li>
                                <li class="list-group-item">
                                    <p>
                                        <strong>Cartão de Crédito</strong>
                                        <span class="label label-warning-light pull-right"> R$ 250,00</span>
                                    </p>
                                    <small class="block text-muted"><i class="fa fa-clock-o"></i> 13/12/2015</small>
                                </li>
                                <li class="list-group-item">
                                    <p>
                                        <strong>Cartão de Crédito</strong>
                                        <span class="label label-warning-light pull-right"> R$ 250,00</span>
                                    </p>
                                    <small class="block text-muted"><i class="fa fa-clock-o"></i> 15/12/2015</small>
                                </li>
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
                                    <div class="pull-left">
                                        <button type="button" class="btn btn-w-m btn-danger" data-toggle="modal"
                                                data-target="#DespesaModal">
                                            Nova Despesa
                                        </button>
                                        <div class="modal inmodal" id="DespesaModal" tabindex="-1" role="dialog"
                                             aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content animated fadeIn">
                                                    <form class="form-horizontal">
                                                        <div class="modal-header">
                                                            <button type="button" class="close" data-dismiss="modal">
                                                                <span aria-hidden="true">&times;</span><span
                                                                    class="sr-only">Close</span></button>
                                                            <h4 class="modal-title">Nova Despesa</h4>
                                                        </div>
                                                        <div class="modal-body">
                                                            <p>Cadastrando uma nova despesa.</p>

                                                            <div class="form-group"><label
                                                                    class="col-lg-2 control-label">Nome</label>

                                                                <div class="col-lg-10"><input type="text"
                                                                                              placeholder="Nome"
                                                                                              class="form-control">
                                                                </div>
                                                            </div>
                                                            <div class="form-group"><label
                                                                    class="col-lg-2 control-label">Descrição</label>

                                                                <div class="col-lg-10"><input type="text"
                                                                                              placeholder="Descricao"
                                                                                              class="form-control">
                                                                </div>
                                                            </div>
                                                            <div class="form-group"><label
                                                                    class="col-lg-2 control-label">Valor</label>

                                                                <div class="col-lg-10"><input type="text"
                                                                                              placeholder="Valor"
                                                                                              class="form-control">
                                                                </div>
                                                            </div>

                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-white"
                                                                    data-dismiss="modal">Cancelar
                                                            </button>
                                                            <button class="btn btn-primary" type="submit">Salvar
                                                            </button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="pull-right">
                                        <button type="button" class="btn btn-w-m btn-primary" data-toggle="modal"
                                                data-target="#EntradaModal">
                                            Nova Entrada
                                        </button>
                                        <div class="modal inmodal" id="EntradaModal" tabindex="-1" role="dialog"
                                             aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content animated fadeIn">
                                                    <form class="form-horizontal">
                                                        <div class="modal-header">
                                                            <button type="button" class="close" data-dismiss="modal">
                                                                <span aria-hidden="true">&times;</span><span
                                                                    class="sr-only">Close</span></button>
                                                            <h4 class="modal-title">Nova Entrada</h4>
                                                        </div>
                                                        <div class="modal-body">
                                                            <p>Cadastrando uma nova entrada.</p>

                                                            <div class="form-group"><label
                                                                    class="col-lg-2 control-label">Nome</label>

                                                                <div class="col-lg-10"><input type="text"
                                                                                              placeholder="Nome"
                                                                                              class="form-control">
                                                                </div>
                                                            </div>
                                                            <div class="form-group"><label
                                                                    class="col-lg-2 control-label">Descrição</label>

                                                                <div class="col-lg-10"><input type="text"
                                                                                              placeholder="Descricao"
                                                                                              class="form-control">
                                                                </div>
                                                            </div>
                                                            <div class="form-group"><label
                                                                    class="col-lg-2 control-label">Valor</label>

                                                                <div class="col-lg-10"><input type="text"
                                                                                              placeholder="Valor"
                                                                                              class="form-control">
                                                                </div>
                                                            </div>

                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-white"
                                                                    data-dismiss="modal">Cancelar
                                                            </button>
                                                            <button class="btn btn-primary" type="submit">Salvar
                                                            </button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
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

                        <div class="ibox-content no-padding">
                            <ul class="list-group">
                                <li class="list-group-item">
                                    <p>
                                        <strong>Salário</strong>
                                        <span class="label label-info pull-right"> R$ 250,00</span>
                                    </p>
                                    <small class="block text-muted"><i class="fa fa-clock-o"></i> 01/01/2016</small>
                                </li>
                                <li class="list-group-item">
                                    <p>
                                        <strong>Salário</strong>
                                        <span class="label label-info pull-right"> R$ 250,00</span>
                                    </p>
                                    <small class="block text-muted"><i class="fa fa-clock-o"></i> 01/02/2016</small>
                                </li>
                                <li class="list-group-item">
                                    <p>
                                        <strong>Salário</strong>
                                        <span class="label label-info pull-right"> R$ 250,00</span>
                                    </p>
                                    <small class="block text-muted"><i class="fa fa-clock-o"></i> 01/03/2016</small>
                                </li>
                                <li class="list-group-item">
                                    <p>
                                        <strong>Salário</strong>
                                        <span class="label label-info pull-right"> R$ 250,00</span>
                                    </p>
                                    <small class="block text-muted"><i class="fa fa-clock-o"></i> 01/04/2016</small>
                                </li>
                                <li class="list-group-item">
                                    <p>
                                        <strong>Salário</strong>
                                        <span class="label label-info pull-right"> R$ 250,00</span>
                                    </p>
                                    <small class="block text-muted"><i class="fa fa-clock-o"></i> 01/05/2016</small>
                                </li>
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
                                </tr>
                                </thead>

                                <tbody>
                                <tr>
                                    <td><span class="label label-info">ENTRADA</span></td>
                                    <td>Salário</td>
                                    <td>salário que se recebe todo mês.</td>
                                    <td>R$ 2000,00</td>
                                    <td>10/12/2015</td>
                                </tr>
                                <tr>
                                    <td><span class="label label-danger">DESPESA</span></td>
                                    <td>Cartão de Crédito 1</td>
                                    <td>conta do cartão de crédito que vence todo mês.</td>
                                    <td>R$ 2000,00</td>
                                    <td>10/12/2015</td>
                                </tr>
                                <tr>
                                    <td><span class="label label-danger">DESPESA</span></td>
                                    <td>Cartão de Crédito 1</td>
                                    <td>conta do cartão de crédito que vence todo mês.</td>
                                    <td>R$ 2000,00</td>
                                    <td>10/12/2015</td>
                                </tr>
                                <tr>
                                    <td><span class="label label-danger">DESPESA</span></td>
                                    <td>Cartão de Crédito 1</td>
                                    <td>conta do cartão de crédito que vence todo mês.</td>
                                    <td>R$ 2000,00</td>
                                    <td>10/12/2015</td>
                                </tr>
                                <tr>
                                    <td><span class="label label-danger">DESPESA</span></td>
                                    <td>Cartão de Crédito 1</td>
                                    <td>conta do cartão de crédito que vence todo mês.</td>
                                    <td>R$ 2000,00</td>
                                    <td>10/12/2015</td>
                                </tr>
                                <tr>
                                    <td><span class="label label-danger">DESPESA</span></td>
                                    <td>Cartão de Crédito 1</td>
                                    <td>conta do cartão de crédito que vence todo mês.</td>
                                    <td>R$ 2000,00</td>
                                    <td>10/12/2015</td>
                                </tr>
                                <tr>
                                    <td><span class="label label-danger">DESPESA</span></td>
                                    <td>Cartão de Crédito 1</td>
                                    <td>conta do cartão de crédito que vence todo mês.</td>
                                    <td>R$ 2000,00</td>
                                    <td>10/12/2015</td>
                                </tr>
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
                    data: [65, 59, 80, 81, 56, 55, 40,65, 59, 80, 81, 56]
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
