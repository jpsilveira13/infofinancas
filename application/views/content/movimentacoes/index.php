
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
                                <input type="text" name="vencimento" class="form-control" placeholder="03/04/2014"
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

<script>

    $(document).ready(function () {
        var $response = JSON.parse($('#idDiv').html());
        //para ver os dados e testar se deu certo use o console.log:
        console.log($response);

        /*$('#vencimento').datepicker({
            todayBtn: "linked",
            keyboardNavigation: false,
            forceParse: false,
            calendarWeeks: true,
            autoclose: true
        });*/

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