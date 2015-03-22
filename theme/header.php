<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title><?php echo $controller->title; ?></title>

    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="<?php echo SITE_URL . '/theme/materialize/css/materialize.min.css' ?>"  media="screen,projection"/>

    <!-- Bootstrap: Latest compiled and minified CSS -->
    <!--<link rel="stylesheet" href="<?php echo SITE_URL . '/theme/bootstrap/css/bootstrap.tooltips.min.css'; ?>">
    -->

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>

    <link href="<?php echo SITE_URL . '/theme/style.css' ?>" rel="stylesheet" type="text/css">
    
    <meta name="apple-mobile-web-app-capable" content="yes">
    <link rel="apple-touch-icon" href="<?php echo SITE_URL . '/apple-touch-icon.png'; ?>">

</head>
<body>

    <!--Import jQuery and materialize.js-->
    <script src="<?php echo SITE_URL . '/theme/script/jquery.min.js'; ?>"></script>
    <script type="text/javascript" src="<?php echo SITE_URL . '/theme/materialize/js/materialize.min.js'; ?>"></script>


    <script>
        $( document ).ready(function(){
            $(".button-collapse").sideNav();

            $(function () {
              //$('[data-toggle="tooltip"]').tooltip()
            })

            $('[data-toggle="tooltip"]').tooltip({delay: 0});

        });
    </script>


    <header>

        <nav>
            <div class="nav-wrapper">
                
                <div class="nav-container">
                
                    <a href="<?php echo SITE_URL ?>" class="brand-logo">FysiCards</a>
                    <a href="#" data-activates="mobile-nav" class="button-collapse"><i class="mdi-navigation-menu"></i></a>
                    <ul id="nav-mobile" class="right hide-on-med-and-down">
                        <li><a href="<?php echo SITE_URL ?>"><i class="mdi-communication-textsms left"></i>Question</a></li>
                        <li><a href="<?php echo SITE_URL . '/archive' ?>"><i class="mdi-action-question-answer left"></i>Stats</a></li>
                        <?php if(!\Auth\Auth::check()): ?>
                            <li><a href="<?php echo SITE_URL . '/register' ?>"><i class="mdi-social-person-add left"></i>Register</a></li>
                        <?php endif; ?>
                    </ul>
    
                    <ul id="mobile-nav" class="side-nav">
                        <li><a href="<?php echo SITE_URL ?>"><i class="mdi-communication-textsms left"></i>Question</a></li>
                        <li><a href="<?php echo SITE_URL . '/archive' ?>"><i class="mdi-action-question-answer left"></i>Stats</a></li>
                        <?php if(!\Auth\Auth::check()): ?>
                            <li><a href="<?php echo SITE_URL . '/register' ?>"><i class="mdi-social-person-add left"></i>Register</a></li>
                        <?php endif; ?>
                    </ul>
                
                </div><!-- .nav-container -->

            </div><!-- .nav-wrapper -->
        
        </nav>

    </header>


    <main>