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
                            <li><a href="<?php echo base_url() ?>ProfileController">Perfil</a></li>
                            <li class="divider"></li>
                            <li><a href="<?php echo base_url() ?>">Sair</a></li>
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
                        <a href="<?php echo base_url() ?>">
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
                                        data-target="#inserirModal">    <!-- imagem de perfil -->
                                    <img alt="image" class="img-responsive img-preview"
                                                 src="<?php echo base_url() ?>/assets/img/icon-user-default.jpg">
                                </button>
                                <!-- imagem de perfil -->

                                <div id="inserirModal" class="note-image-dialog modal in" aria-hidden="false">
                                    <!-- modal para inserir imagens -->

                                    <div class="modal-dialog">
                                        <div class="modal-content animated bounceInRight">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal"><span
                                                        aria-hidden="true">&times;</span><span
                                                        class="sr-only">Close</span></button>
                                                <h4>Insira Imagem</h4>
                                            </div>

                                            <div class="modal-body">
                                                <div class="row-fluid">
                                                    <h5>Selecionar arquivo</h5>
                                                    <input class="note-image-input" type="file" name="files"
                                                           accept="image/*">
                                                    <h5>Image URL</h5>
                                                    <input class="note-image-url form-control span12" type="text">
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button href="#" class="btn btn-primary note-image-btn disabled"
                                                        disabled="disabled">
                                                    Insert Image
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- modal para inserir imagens -->

                            </div>

                            <div class="ibox-content profile-content">     <!-- parte das informações -->
                                <h4><strong>Monica Smith</strong></h4>

                                <div class="ibox float-e-margins">    <!--caixa da descrição editável -->
                                    <div class="ibox-title">
                                        <h5>Descrição</h5>
                                        <button id="edit" class="btn btn-primary btn-xs m-l-sm" onclick="edit()"
                                                type="button">
                                            Editar
                                        </button>
                                        <button id="c" class="btn btn-primary  btn-xs" onclick="save()" type="button">
                                            Salvar
                                        </button>

                                    </div>
                                    <div class="ibox-content no-paddings">

                                        <div class="click2edit wrapper p-md table-bordered border-bottom">

                                        </div>

                                    </div>

                                </div>
                                <!--caixa da descrição editável -->

                            </div>
                            <!-- parte das informações -->
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="ibox float-e-margins">
                        <div class="ibox-title">
                            <h5>Dados</h5>
                            <button id="edit" class="btn btn-primary btn-xs m-l-sm " onclick="habilitaCampo()"
                                    type="button">
                                Editar
                            </button>
                        </div>



                        <div class="ibox-content">
                            <div class="form-group">
                                <label class="col-lg-2 control-label">Nome</label>
                                <div class="col-lg-10">
                                    <input name="nome" type="text" disabled placeholder="Disabled input here..." class="form-control">
                                </div>
                            </div>
                            <br><br>
                            <div class="form-group">
                                <label class="col-lg-2 control-label">Email</label>
                                <div class="col-lg-10">
                                    <input name="email" type="text" disabled placeholder="Disabled input here..." class="form-control">
                                </div>
                            </div>
                            <br><br>
                            <div class="form-group">
                                <label class="col-lg-2 control-label">Senha</label>
                                <div class="col-lg-10">
                                    <input name="senha" type="text" disabled placeholder="Disabled input here..." class="form-control">
                                </div>
                            </div>
                            <br><br>

                        </div>
                    </div>

                </div>


                <!-- <div class="col-md-8">
                    <div class="ibox float-e-margins">
                        <div class="ibox-title">
                            <h5>Activites</h5>

                            <div class="ibox-tools">
                                <a class="collapse-link">
                                    <i class="fa fa-chevron-up"></i>
                                </a>
                                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                    <i class="fa fa-wrench"></i>
                                </a>
                                <ul class="dropdown-menu dropdown-user">
                                    <li><a href="#">Config option 1</a>
                                    </li>
                                    <li><a href="#">Config option 2</a>
                                    </li>
                                </ul>
                                <a class="close-link">
                                    <i class="fa fa-times"></i>
                                </a>
                            </div>
                        </div>
                        <div class="ibox-content">

                            <div>
                                <div class="feed-activity-list">

                                    <div class="feed-element">
                                        <a href="#" class="pull-left">
                                            <img alt="image" class="img-circle"
                                                 src="<?php echo base_url() ?>/assets/img/a1.jpg">
                                        </a>

                                        <div class="media-body ">
                                            <small class="pull-right text-navy">1m ago</small>
                                            <strong>Sandra Momot</strong> started following <strong>Monica
                                                Smith</strong>. <br>
                                            <small class="text-muted">Today 4:21 pm - 12.06.2014</small>
                                            <div class="actions">
                                                <a class="btn btn-xs btn-white"><i class="fa fa-thumbs-up"></i> Like
                                                </a>
                                                <a class="btn btn-xs btn-danger"><i class="fa fa-heart"></i> Love</a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="feed-element">
                                        <a href="#" class="pull-left">
                                            <img alt="image" class="img-circle"
                                                 src="<?php echo base_url() ?>/assets/img/profile.jpg">
                                        </a>

                                        <div class="media-body ">
                                            <small class="pull-right">5m ago</small>
                                            <strong>Monica Smith</strong> posted a new blog. <br>
                                            <small class="text-muted">Today 5:60 pm - 12.06.2014</small>

                                        </div>
                                    </div>

                                    <div class="feed-element">
                                        <a href="#" class="pull-left">
                                            <img alt="image" class="img-circle" src="img/a2.jpg">
                                        </a>

                                        <div class="media-body ">
                                            <small class="pull-right">2h ago</small>
                                            <strong>Mark Johnson</strong> posted message on <strong>Monica
                                                Smith</strong> site. <br>
                                            <small class="text-muted">Today 2:10 pm - 12.06.2014</small>
                                            <div class="well">
                                                Lorem Ipsum is simply dummy text of the printing and typesetting
                                                industry. Lorem Ipsum has been the industry's standard dummy text ever
                                                since the 1500s.
                                                Over the years, sometimes by accident, sometimes on purpose (injected
                                                humour and the like).
                                            </div>
                                            <div class="pull-right">
                                                <a class="btn btn-xs btn-white"><i class="fa fa-thumbs-up"></i> Like
                                                </a>
                                                <a class="btn btn-xs btn-white"><i class="fa fa-heart"></i> Love</a>
                                                <a class="btn btn-xs btn-primary"><i class="fa fa-pencil"></i>
                                                    Message</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="feed-element">
                                        <a href="#" class="pull-left">
                                            <img alt="image" class="img-circle"
                                                 src="<?php echo base_url() ?>/assets/img/a3.jpg">
                                        </a>

                                        <div class="media-body ">
                                            <small class="pull-right">2h ago</small>
                                            <strong>Janet Rosowski</strong> add 1 photo on <strong>Monica Smith</strong>.
                                            <br>
                                            <small class="text-muted">2 days ago at 8:30am</small>
                                            <div class="photos">
                                                <a target="_blank"
                                                   href="http://24.media.tumblr.com/20a9c501846f50c1271210639987000f/tumblr_n4vje69pJm1st5lhmo1_1280.jpg">
                                                    <img alt="image" class="feed-photo" src="img/p1.jpg"></a>
                                                <a target="_blank"
                                                   href="http://37.media.tumblr.com/9afe602b3e624aff6681b0b51f5a062b/tumblr_n4ef69szs71st5lhmo1_1280.jpg">
                                                    <img alt="image" class="feed-photo" src="img/p3.jpg"></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="feed-element">
                                        <a href="#" class="pull-left">
                                            <img alt="image" class="img-circle"
                                                 src="<?php echo base_url() ?>/assets/img/a4.jpg">
                                        </a>

                                        <div class="media-body ">
                                            <small class="pull-right text-navy">5h ago</small>
                                            <strong>Chris Johnatan Overtunk</strong> started following <strong>Monica
                                                Smith</strong>. <br>
                                            <small class="text-muted">Yesterday 1:21 pm - 11.06.2014</small>
                                            <div class="actions">
                                                <a class="btn btn-xs btn-white"><i class="fa fa-thumbs-up"></i> Like
                                                </a>
                                                <a class="btn btn-xs btn-white"><i class="fa fa-heart"></i> Love</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="feed-element">
                                        <a href="#" class="pull-left">
                                            <img alt="image" class="img-circle"
                                                 src="<?php echo base_url() ?>/assets/img/a5.jpg">
                                        </a>

                                        <div class="media-body ">
                                            <small class="pull-right">2h ago</small>
                                            <strong>Kim Smith</strong> posted message on <strong>Monica Smith</strong>
                                            site. <br>
                                            <small class="text-muted">Yesterday 5:20 pm - 12.06.2014</small>
                                            <div class="well">
                                                Lorem Ipsum is simply dummy text of the printing and typesetting
                                                industry. Lorem Ipsum has been the industry's standard dummy text ever
                                                since the 1500s.
                                                Over the years, sometimes by accident, sometimes on purpose (injected
                                                humour and the like).
                                            </div>
                                            <div class="pull-right">
                                                <a class="btn btn-xs btn-white"><i class="fa fa-thumbs-up"></i> Like
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="feed-element">
                                        <a href="#" class="pull-left">
                                            <img alt="image" class="img-circle"
                                                 src="<?php echo base_url() ?>/assets/img/profile.jpg">
                                        </a>

                                        <div class="media-body ">
                                            <small class="pull-right">23h ago</small>
                                            <strong>Monica Smith</strong> love <strong>Kim Smith</strong>. <br>
                                            <small class="text-muted">2 days ago at 2:30 am - 11.06.2014</small>
                                        </div>
                                    </div>
                                    <div class="feed-element">
                                        <a href="#" class="pull-left">
                                            <img alt="image" class="img-circle"
                                                 src="<?php echo base_url() ?>/assets/img/a7.jpg">
                                        </a>

                                        <div class="media-body ">
                                            <small class="pull-right">46h ago</small>
                                            <strong>Mike Loreipsum</strong> started following <strong>Monica
                                                Smith</strong>. <br>
                                            <small class="text-muted">3 days ago at 7:58 pm - 10.06.2014</small>
                                        </div>
                                    </div>
                                </div>

                                <button class="btn btn-primary btn-block m"><i class="fa fa-arrow-down"></i> Show More
                                </button>

                            </div>

                        </div>
                    </div>

                </div>-->
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

<script>
    $(document).ready(function () {

        $('.summernote').summernote();

    });
    var edit = function () {
        $('.click2edit').summernote({focus: true});
    };
    var save = function () {
        var aHTML = $('.click2edit').code(); //save HTML If you need(aHTML: array).
        $('.click2edit').destroy();
    };
    var habilitaCampo = function (){
        $(document.getElementsByName('nome')).disable(false);
        $(document.getElementsByName('email')).disable(false);
        $(document.getElementsByName('senha')).disable(false);
    };
</script>

</body>

</html>
