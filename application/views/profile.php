<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Dynado Finanças | Perfil</title>

    <link href="<?php echo base_url() ?>/assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>/assets/font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>/assets/css/animate.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>/assets/css/style.css" rel="stylesheet">

    <link href="<?php echo base_url() ?>/assets/css/plugins/summernote/summernote.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>/assets/css/plugins/summernote/summernote-bs3.css" rel="stylesheet">

    <!-- Toastr style -->
    <link href="<?php echo base_url() ?>/assets/css/plugins/toastr/toastr.min.css" rel="stylesheet">

    <!-- Gritter -->
    <link href="<?php echo base_url() ?>/assets/js/plugins/gritter/jquery.gritter.css" rel="stylesheet">

    <!-- DataPicker -->
    <link href="<?php echo base_url() ?>/assets/css/plugins/datapicker/datepicker3.css" rel="stylesheet">

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
                            <span class="clear"> <span class="block m-t-xs">
                                    <strong class="font-bold"><?php echo $this->session->userdata('nome') ?></strong>
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

    <div id="page-wrapper" class="gray-bg">

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

        <div class="row wrapper border-bottom white-bg page-heading">
            <div class="col-lg-10">
                <h2>Perfil</h2>
                <ol class="breadcrumb">
                    <li>
                        <a href="<?php echo base_url() ?>HomeController/index">Inicio</a>
                    </li>
                    <li class="active">
                        <strong>Perfil</strong>
                    </li>
                </ol>
            </div>
            <div class="col-lg-2">

            </div>
        </div>

        <div class="wrapper wrapper-content">
            <div class="row animated fadeInDown">
                <div class="col-md-6">
                    <div class="ibox float-e-margin">
                        <div class="ibox-title">
                            <h5>Informações do Perfil</h5>
                        </div>
                        <div>
                            <div class="ibox-content no-padding border-left-right">

                                <button type="button" class="no-borders no-margins no-padding" data-toggle="modal"
                                        data-target="#inserirModal">
                                    <img alt="image" class="img-responsive img-preview "
                                         src="<?php echo base_url() ?>/assets/img/icon-user-default.jpg">
                                    <!-- imagem de perfil -->
                                </button>

                                <div id="inserirModal" class="note-image-dialog modal in" aria-hidden="false">
                                    <!-- modal para inserir imagens -->

                                    <form name="upload" action="<?php echo base_url() ?>ProfileController/upload">
                                        <div class="modal-dialog">
                                            <div class="modal-content animated bounceInDown">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal"><span
                                                            aria-hidden="true">&times;</span><span
                                                            class="sr-only">Cancelar</span></button>
                                                    <h4>Perfil | Imagem</h4>
                                                </div>

                                                <div class="modal-body">
                                                    <div class="row-fluid">
                                                        <h5>Selecionar arquivo</h5>
                                                        <input type="file" name="imagem" size="200"/>
                                                        <br>

                                                        <div class="modal-footer">
                                                            <button class="btn btn-primary note-image-btn"
                                                                    type="submit">
                                                                Inserir Imagem
                                                            </button>
                                                        </div>
                                                        </body>
                                                        </html>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <!-- modal para inserir imagens -->

                                <div>
                                    <div class="ibox float-e-margins">
                                        <div>
                                            <div class="ibox-tools">
                                                <button type="button" class="btn btn-primary btn-xs m-l-sm "
                                                        data-toggle="modal"
                                                        data-target="#editarDescricaoModal">
                                                    Editar
                                                </button>
                                            </div>
                                        </div>

                                        <div id="editarDescricaoModal" class="modal inmodal" aria-hidden="false">
                                            <div class="modal-dialog">
                                                <div class="modal-content animated bounceInDown">
                                                    <div class="modal-header">

                                                        <i class="fa fa-edit modal-icon"></i>

                                                    </div>
                                                    <form class="m-t" role="form"
                                                          action="<?php echo base_url() ?>ProfileController/setDescricao"
                                                          method="post">
                                                        <div class="modal-body">


                                                            <div class="form-group">
                                                                <label class="col-lg-2 control-label">Descrição</label>


                                                                <div class="col-lg-10">
                                                                    <input name="descricao" type="text"
                                                                           value="<?php echo $this->session->userdata('descricao') ?>"
                                                                           class="form-control">
                                                                </div>
                                                            </div>
                                                            <br><br>

                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-white"
                                                                    data-dismiss="modal">Cancelar
                                                            </button>
                                                            <button type="submit" class="btn btn-primary">Salvar
                                                            </button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div> <!-- Modal para alterar as informações -->

                                        <div class="ibox-content">
                                            <div class="form-group"> <!-- mostrar as informações -->
                                                <label class="col-lg-2 control-label">Descrição</label>
                                                <br><br>

                                                <div class="col-lg-15 ">
                                                    <input id="nome" type="text"
                                                           value="<?php echo $this->session->userdata('descricao') ?>"
                                                           class="form-control" disabled>
                                                </div>
                                            </div>
                                            <br><br>

                                        </div> <!-- info da pagina -->
                                    </div>

                                </div>

                            </div>

                        </div>
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
                                    <div class="modal-header">

                                        <i class="fa fa-edit modal-icon"></i>

                                    </div>
                                    <form class="m-t" role="form"
                                          action="<?php echo base_url() ?>ProfileController/editar"
                                          method="post">
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
                        </div> <!-- alterar as informações -->

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
                    </div>

                </div>


            </div class="row animated fadeInDown">
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
<script src="<?php echo base_url() ?>/assets/js/bootstrap.js"></script>
<script src="<?php echo base_url() ?>/assets/js/plugins/metisMenu/jquery.metisMenu.js"></script>
<script src="<?php echo base_url() ?>/assets/js/plugins/slimscroll/jquery.slimscroll.min.js"></script>

<!-- Custom and plugin javascript -->
<script src="<?php echo base_url() ?>/assets/js/inspinia.js"></script>
<script src="<?php echo base_url() ?>/assets/js/plugins/pace/pace.min.js"></script>

<!-- Peity -->
<script src="<?php echo base_url() ?>/assets/js/plugins/peity/jquery.peity.min.js"></script>

<!-- Peity -->
<script src="<?php echo base_url() ?>/assets/js/demo/peity-demo.js"></script>

<!-- SUMMERNOTE -->
<script src="<?php echo base_url() ?>/assets/js/plugins/summernote/summernote.min.js"></script>

<div id="idDiv" style="display:none"><?php echo $response; ?></div>

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

        $('.summernote').summernote();

    });
    var edit = function () {
        $('.click2edit').summernote({focus: true});
    };
    var save = function () {
        var aHTML = $('.click2edit').code(); //save HTML If you need(aHTML: array).
        $('.click2edit').destroy();

    };


</script>

</body>

</html>
