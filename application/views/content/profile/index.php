<!-- Perfil -->
<div class="wrapper wrapper-content">
    <div class="row animated fadeInDown">
        <div class="col-md-6">
            <div class="ibox float-e-margin">

                <div class="ibox-title">
                    <h5>Informações do Perfil</h5>
                </div>

                <div class="ibox-content text-center">

                    <br/>

                    <button type="button" class="no-borders no-margins no-padding" data-toggle="modal"
                            data-target="#inserirModal">
                        <img alt="image" class="img-responsive img-preview "
                             src="<?php echo base_url() ?><?php echo $_SESSION['fotoPerfil'];?>"

                        <!-- imagem de perfil -->
                    </button>

                    <br/>
                    <br/>

                    <!-- modal para inserir imagens -->
                    <div id="inserirModal" class="note-image-dialog modal in" aria-hidden="false">
                        <div class="modal-dialog">
                            <div class="modal-content animated bounceInDown">
                                <?php echo form_open_multipart('ProfileController/upload'); ?>

                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal"><span
                                            aria-hidden="true">&times;</span><span
                                            class="sr-only">Cancelar</span></button>
                                    <h4>Perfil | Imagem</h4>
                                </div>

                                <div class="modal-body">
                                    <div class="row-fluid">
                                        <h5>Selecionar arquivo</h5>
                                        <input type="file" name="arquivo" id="arquivo" size="200"/>
                                    </div>
                                </div>

                                <div class="modal-footer">
                                    <button class="btn btn-primary note-image-btn"
                                            type="submit">
                                        Inserir Imagem
                                    </button>
                                </div>

                                </form>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="ibox-content">

                    <!-- Modal para alterar as informações -->
                    <div id="editarDescricaoModal" class="modal inmodal" aria-hidden="false">
                        <div class="modal-dialog">
                            <div class="modal-content animated bounceInDown">
                                <form class="m-t" role="form"
                                      action="<?php echo base_url() ?>ProfileController/setDescricao" method="post">

                                    <div class="modal-header">
                                        <i class="fa fa-edit modal-icon"></i>
                                    </div>

                                    <div class="modal-body">
                                        <div class="form-group">
                                            <label class="col-lg-2 control-label">Descrição</label>

                                            <div class="col-lg-10">
                                                <input name="descricao" type="text"
                                                       value="<?php echo $this->session->userdata('descricao') ?>"
                                                       class="form-control">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-white"
                                                data-dismiss="modal">Cancelar
                                        </button>
                                        <button type="submit" class="btn btn-primary">Salvar
                                        </button>
                                    </div>
                            </div>

                            </form>
                        </div>
                    </div>

                    <button type="button" class="btn btn-primary btn-xs m-l-sm pull-right" data-toggle="modal"
                            data-target="#editarDescricaoModal">
                        Editar
                    </button>

                    <div class="form-group"> <!-- mostrar as informações -->
                        <label class="col-lg-12 control-label">Descrição</label>
                        <br><br>

                        <div class="col-lg-12">
                            <input id="nome" type="text"
                                   value="<?php echo $this->session->userdata('descricao') ?>"
                                   class="form-control" disabled>
                        </div>
                    </div>
                    <br><br>
                </div>

                <div class="ibox-content"></div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5>Dados</h5>

                    <div class="ibox-tools">
                        <button type="button" class="btn btn-primary btn-xs m-l-sm " data-toggle="modal"
                                data-target="#editarModal">
                            Editar
                        </button>
                    </div>
                </div>

                <div id="editarModal" class="modal inmodal" aria-hidden="false">
                    <div class="modal-dialog">
                        <div class="modal-content animated bounceInDown">
                            <form class="m-t" role="form" action="<?php echo base_url() ?>ProfileController/editar"
                                  method="post">

                                <div class="modal-header">
                                    <i class="fa fa-edit modal-icon"></i>
                                </div>

                                <div class="modal-body">

                                    <div class="form-group">
                                        <label class="col-lg-2 control-label">Nome</label>


                                        <div class="col-lg-10">
                                            <input name="nome" type="text"
                                                   value="<?php echo $this->session->userdata('nome') ?>"
                                                   class="form-control">
                                        </div>
                                    </div>
                                    <br><br>

                                    <div class="form-group">
                                        <label class="col-lg-2 control-label">Email</label>

                                        <div class="col-lg-10">
                                            <input name="email" type="text"
                                                   value="<?php echo $this->session->userdata('email') ?>"
                                                   class="form-control">
                                        </div>
                                    </div>
                                    <br><br>

                                    <div class="form-group">
                                        <label class="col-lg-2 control-label">Senha</label>

                                        <div class="col-lg-10">
                                            <input name="senha" type="text"
                                                   value="<?php echo $this->session->userdata('senha') ?>"
                                                   class="form-control">
                                        </div>
                                    </div>

                                </div>

                                <div class="modal-footer">
                                    <button type="button" class="btn btn-white" data-dismiss="modal">Cancelar
                                    </button>
                                    <button type="submit" class="btn btn-primary">Salvar</button>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
                <!-- alterar as informações -->

                <div class="ibox-content">
                    <div class="form-group"> <!-- mostrar as informações -->
                        <label class="col-lg-2 control-label">Nome</label>

                        <div class="col-lg-10">
                            <input id="nome" type="text"
                                   placeholder="<?php echo $this->session->userdata('nome') ?>"
                                   class="form-control" disabled>
                        </div>
                    </div>
                    <br><br>

                    <div class="form-group">
                        <label class="col-lg-2 control-label">Email</label>

                        <div class="col-lg-10">
                            <input id="email" type="text"
                                   placeholder="<?php echo $this->session->userdata('email') ?>"
                                   class="form-control" disabled>
                        </div>
                    </div>
                    <br><br>

                    <div class="form-group">
                        <label class="col-lg-2 control-label">Senha</label>

                        <div class="col-lg-10">
                            <input id="senha" type="text"
                                   placeholder="<?php echo $this->session->userdata('senha') ?>"
                                   class="form-control" disabled>
                        </div>
                    </div>
                    <br><br>

                </div>

                <div class="ibox-content"></div>
            </div>
        </div>

    </div class="row animated fadeInDown">
</div>

<script>
    $(document).ready(function () {
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

            if ($response.status == 'SUCCESS') {
                toastr.success($response.message, $response.title);
            }

            if ($response.status == 'ERROR') {
                toastr.error($response.message, $response.title);
            }

        }, 1300);

    });

</script>