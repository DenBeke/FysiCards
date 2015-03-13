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
                <a href="#" class="brand-logo">FysiCards</a>
                <a href="#" data-activates="mobile-nav" class="button-collapse"><i class="mdi-navigation-menu"></i></a>
                <ul id="nav-mobile" class="right hide-on-med-and-down">
                    <li><a href="sass.html"><i class="mdi-communication-textsms left"></i>Question</a></li>
                    <li><a href="sass.html"><i class="mdi-action-question-answer left"></i>Archive</a></li>
                    <li><a href="components.html"><i class="mdi-social-group left"></i>Users</a></li>
                </ul>

                <ul id="mobile-nav" class="side-nav">
                    <li><a href="sass.html">Sass</a></li>
                    <li><a href="components.html">Components</a></li>
                </ul>

            </div>
        </nav>

    </header>


    <main>