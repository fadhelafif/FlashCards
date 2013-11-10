<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="shortcut icon" href="<?php echo base_url('assets/ico/favicon.png'); ?>">

        <title>Flash Card</title>

        <!-- Bootstrap core CSS -->
        <link href="<?php echo base_url('assets/css/bootstrap.css'); ?>" rel="stylesheet">
        <link href="<?php echo base_url('assets/css/font-awesome.css'); ?>" rel="stylesheet">

        <!-- Custom styles for this template -->
        <link href="<?php echo base_url('assets/css/style.css'); ?>" rel="stylesheet">

        <!-- Just for debugging purposes. Don't actually copy this line! -->
        <!--[if lt IE 9]><script src="<?php echo base_url('assets/js/ie8-responsive-file-warning.js'); ?>"></script><![endif]-->

        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->
    </head>

    <body>

        <!-- Fixed navbar -->
        <div class="navbar navbar-default">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">Flash Card</a>
                </div>
                <div class="navbar-collapse collapse">

                    <form class="navbar-form navbar-left">
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-btn">
                                    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">Categories <span class="caret"></span></button>
                                    <ul class="dropdown-menu" role="menu">
                                        <li><a href="#">Language</a></li>
                                        <li><a href="#">Geography</a></li>
                                        <li><a href="#">Chemical</a></li>
                                        <li><a href="#">Biology</a></li>
                                        <li><a href="#">History</a></li>
                                        <li><a href="#">Entertainment</a></li>
                                    </ul>
                                </div>
                                <input type="text" placeholder="Search" class="form-control" value="<?php echo $search; ?>">
                                <span class="input-group-btn">
                                    <button class="btn btn-success" type="submit">Go!</button>
                                </span>
                            </div>
                        </div>
                    </form>
                    <ul class="nav navbar-nav">
                        <li><a href="#about">Explore</a></li>
                        <li><a href="#contact">Help</a></li>
                        
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <a href="#">
                                <img width="20" height="20" src="<?php echo base_url('assets/img/placeholder.jpg'); ?>" alt="flashcard cover">
                                John Doe
                            </a>
                        </li>
                        <li><a href="#"><i class="fa fa-file-o"></i></a></li>
                        <li><a href="#"><i class="fa fa-cogs"></i></a></li>
                        <li><a href="#"><i class="fa fa-sign-out"></i></a></li>
                    </ul>
                </div><!--/.nav-collapse -->
            </div>
        </div>