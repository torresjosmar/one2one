<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = 'CakePHP: the rapid development php framework';
?>
<!DOCTYPE html>
<html>

<head>
<meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>one2one music school</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

		<!-- Google Fonts
		============================================ -->		
       	<link href='https://fonts.googleapis.com/css?family=Roboto:400,700,500italic,500,400italic,700italic,900,100,300' rel='stylesheet' type='text/css'>
	   	<link href='https://fonts.googleapis.com/css?family=Lato:400,700,400italic,900' rel='stylesheet' type='text/css'>



        <?= $this->Html->css('custom.css') ?>
        <?= $this->Html->css('stylos.css') ?>
        <?= $this->Html->css('custom-themes.css') ?>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
        crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp"crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
        
    <link rel="stylesheet" href="//malihu.github.io/custom-scrollbar/jquery.mCustomScrollbar.min.css">
    <link rel="stylesheet" href="assets/css/custom.css">
    <link rel="stylesheet" href="assets/css/stylos.css">
    <link rel="stylesheet" href="assets/css/custom-themes.css">
  
		

	
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
    <script src="//malihu.github.io/custom-scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="assets/js/custom.js"></script>

</head>

<?php 

	$session = $this->request->session();


 ?>

<body style="padding-right: 0 !important;">

<header>
        <div class="row sinborde" style="margin: 0; padding: 0;">
      <div class="col-md-12 abajo header">
        <center>
            <?= 
                                            $this->Html->image(
                                                "logo/Logo_Header.png", 
                                                ["alt" => "one 2 one music school",
                                                "style" => "width: 157px;",
                                                "url" => ["controller" => "pages", "action" => "home"]]
                                            );
                                        ?>
        </center>     
      
      </div>
</header>


      
    <div class="page-wrapper chiller-theme sidebar-bg bg1 toggled">
        <a id="show-sidebar" class="btn btn-sm btn-dark" href="#">
            <i class="fas fa-bars"></i>
        </a>
        <nav id="sidebar" class="sidebar-wrapper">
            <div class="sidebar-content">
                <div class="sidebar-brand">
                    <a href="#">Menu</a>
                 
                </div>
                <div class="sidebar-header">
                    <div class="user-pic">
                      
                          <?= 
                                            $this->Html->image(
                                                "logo/user.jpg", 
                                                ["alt" => "one 2 one music school",
                                                "style" => "width: 100%;",
                                                "url" => ["controller" => "pages", "action" => "home"]]
                                            );
                                        ?>
                    </div>
                    <div class="user-info">
                        <span class="user-name">
                            <strong>Usuario</strong>
                        </span>
                        <span class="user-role">Administrator</span>
                        <span class="user-status">
                            <i class="fa fa-circle"></i>
                            <span>Online</span>
                        </span>
                    </div>
                </div>
                <!-- sidebar-header  -->
                
                <!-- sidebar-search  -->
                <div class="sidebar-menu">
                    <ul>
                        <li class="header-menu">
                            <span>General</span>
                        </li>
                        <li class="sidebar-dropdown">
                            <a >
                                <i class="far fa-address-book"></i>
                                <span>Listado de Usuario</span>
                            </a>
                            <div class="sidebar-submenu">
                                <ul>
                                    <li>
                                        <a href="<?php echo $this->Url->build(["controller" => "usuario","action" => "listadoalumnos"]); ?>">Alumnos</a>
                                    </li>
                                    <li>
                                        <a href="<?php echo $this->Url->build(["controller" => "usuario","action" => "listadoprofesores"]); ?>">Profesores</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="sidebar-dropdown">
                            <a >
                                <i class="fas fa-address-book"></i>
                                <span>Creditos</span>
                            </a>
                            <div class="sidebar-submenu"> 
                                <ul>
                                    <li>
                                        <a href="<?php echo $this->Url->build(["controller" => "usuario","action" => "informepagos"]); ?>">Saldos</a>
                                    </li>
                                    <li>
                                        <a href="#">Peticiones de dinero</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="sidebar-dropdown">
                            <a >
                                <i class="fas fa-list-ol"></i>
                                <span>Gestion de planes</span>
                            </a>
                            <div class="sidebar-submenu"> 
                                <ul>
                                    <li>
                                        <a href="#">Edicion de precios</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                                      
                        <li class="sidebar-dropdown">
                            <a>
                                <i class="fas fa-edit"></i>
                                <span>Gestion de profesores</span>
                            </a>
                            <div class="sidebar-submenu"> 
                                <ul>
                                    <li>
                                        <a href="<?php echo $this->Url->build(["controller" => "usuario","action" => "aprobacionprofesores"]); ?>">Profesores pendientes por aprobacion</a>
                                    </li>
                                </ul>
                                <ul>
                                    <li>
                                        <a href="#">Comprobacion de formacion y trayectoria de profesor</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
                <!-- sidebar-menu  -->
 
            <!-- sidebar-content  -->
            
        </nav>
        <!-- sidebar-wrapper  -->
        <main class="page-content style">
            <div class="container-fluid">
                    <?= $this->Flash->render() ?> 
                    <?= $this->fetch('content') ?>
            </div>
        </main>
        <!-- page-content" -->
    </div>
    <!-- page-wrapper -->
 </div>

</body>
<?= $this->Html->script('custom.js') ?>
</html>
