<html>
    <head>
        <title>Music theme</title>

        <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">


        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <?php wp_head(); ?>
    </head>
    <body>
        <nav class="navbar navbar-default navbar-fixed-top <?php if (is_admin_bar_showing()){ echo "wpadminbar-bootstrap"; }?>">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a href="#menu-toggle" class="navbar-brand" id="menu-toggle"><i class="material-icons">menu</i></a>
                    <a class="navbar-brand" href="<?php echo esc_url( home_url( '/' )); ?>">Home</a>

                </div>
            </div>
        </nav>
        <div id="wrapper">
