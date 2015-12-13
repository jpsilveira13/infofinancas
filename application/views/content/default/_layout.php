<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Dynado Finanças</title>

    <?php include('_style.php'); ?>

</head>

<body>

<?php include('_scripts.php'); ?>

<div id="idDiv" style="display:none"><?php echo $response; ?></div>

<div id="wrapper">

    <!-- Menu Lateral -->
    <nav class="navbar-default navbar-static-side" role="navigation">
        <div class="sidebar-collapse">
            <ul class="nav" id="side-menu">

                <!-- Perfil -->
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

                <!-- Home -->
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

            <div id="contents"><?php echo $contents ?></div>

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

</body>

</html>
