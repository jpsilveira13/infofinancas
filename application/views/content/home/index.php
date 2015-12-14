 <!-- Despesasz/Fluxo de Caixa/Entradas -->
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
                                    <small class="block text-muted"><i class="fa fa-clock-o"> </i> ' . $movimentacao->vencimento . '</small>
                                </li>
                                ';
                            $count++;
                        }
                    }
                    if ($count == 0) {
                        echo
                        '
                        <li class="list-group-item">
                            <p>
                                Nenhuma despesa encontrada
                            </p>
                        </li>
                        ';
                    }
                    ?>

                </ul>
            </div>

            <div class="ibox-content"></div>

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

            <div class="ibox-content"></div>

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
                                    <small class="block text-muted"><i class="fa fa-clock-o"> </i> ' . $movimentacao->vencimento . '</small>
                                </li>
                                ';
                            $count++;
                        }
                    }
                    if ($count == 0) {
                        echo
                        '
                        <li class="list-group-item">
                            <p>
                                Nenhuma entrada encontrada
                            </p>
                        </li>
                        ';
                    }
                    ?>
                </ul>
            </div>

            <div class="ibox-content"></div>

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
                        if ($movimentacao->tipo == 'DESPESA') {
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
                        $count++;
                    }
                    if ($count == 0) {
                        echo
                        '
                                    <tr>
                                        <td class="text-center" colspan="6">
                                            Nenhuma movimentação encontrada
                                        </td>
                                    </tr>
                                    ';
                    }
                    ?>

                    </tbody>

                </table>

            </div>

            <div class="ibox-content"></div>

        </div>
    </div>
</div>

<script>

    $(document).ready(function () {
        var $response = JSON.parse($('#idDiv').html());

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

            if ($response.status == 'SUCCESS') {
                toastr.success($response.message, $response.title);
            }

            if ($response.status == 'ERROR') {
                toastr.error($response.message, $response.title);
            }

        }, 1300);

        var $Ddatasets = [];
        var $Edatasets = [];

        for (var $cont = 0; $cont < 12; $cont++) {
            $Ddatasets[$cont] = 0;
            $Edatasets[$cont] = 0;
        }

        $.each($response.movimentacoes, function (key, value) {
            var data = value.vencimento.split("-");

            if (value.tipo == "DESPESA") {
                $Ddatasets[parseInt(data[1]) - 1] = parseFloat($Ddatasets[parseInt(data[1] - 1)]) + parseFloat(value.valor);
            } else {
                $Edatasets[parseInt(data[1]) - 1] = parseFloat($Edatasets[parseInt(data[1] - 1)]) + parseFloat(value.valor);
            }
        });

        var lineData = {
            labels: ["Janeiro", "Fevereiro", "Março", "Abril", "Maio", "Junho", "Julho", "Agosto", "Setembro", "Outubro", "Novembro", "Dezembro"],
            datasets: [
                {
                    label: "Example dataset",
                    fillColor: "rgba(225,0,0,0.1)",//"rgba(220,220,220,0.5)",
                    strokeColor: "rgba(225,0,0,0.3)",
                    pointColor: "rgba(225,0,0,0.3)",
                    pointStrokeColor: "#fff",
                    pointHighlightFill: "#fff",
                    pointHighlightStroke: "rgba(220,220,220,1)",
                    data: $Ddatasets
                },
                {
                    label: "Example dataset",
                    fillColor: "rgba(26,179,148,0.5)",
                    strokeColor: "rgba(26,179,148,0.7)",
                    pointColor: "rgba(26,179,148,1)",
                    pointStrokeColor: "#fff",
                    pointHighlightFill: "#fff",
                    pointHighlightStroke: "rgba(26,179,148,1)",
                    data: $Edatasets
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
            responsive: true
        };


        var ctx = document.getElementById("lineChart").getContext("2d");
        var myNewChart = new Chart(ctx).Line(lineData, lineOptions);

    });

</script>