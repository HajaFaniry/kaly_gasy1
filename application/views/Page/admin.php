<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="en">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Kaly gasy | administrateur</title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-icon.png">

    <!-- Favicon -->   
    <link href="<?php echo base_url("assets/img/favicon.ico");?>" rel="shortcut icon"/>


    <link rel="stylesheet" href="<?php echo base_url("assets/vendors/bootstrap/dist/css/bootstrap.min.css");?>">
    <link rel="stylesheet" href="<?php echo base_url("assets/vendors/font-awesome/css/font-awesome.min.css");?>">
    <link rel="stylesheet" href="<?php echo base_url("assets/vendors/themify-icons/css/themify-icons.css");?>">
    <link rel="stylesheet" href="<?php echo base_url("assets/vendors/flag-icon-css/css/flag-icon.min.css");?>">
    <link rel="stylesheet" href="<?php echo base_url("assets/vendors/selectFX/css/cs-skin-elastic.css");?>">
    <link rel="stylesheet" href="<?php echo base_url("assets/vendors/jqvmap/dist/jqvmap.min.css");?>">


    <link rel="stylesheet" href="<?php echo base_url("assets/cssad/style.css");?>">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

</head>

<body>


    <!-- Left Panel -->

    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">

            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="./"> Acceuil - Kaly gasy </a>
            </div>

            <!-- /.navbar-collapse -->
        </nav>
    </aside><!-- /#left-panel -->

    <!-- Left Panel -->

    <!-- Right Panel -->

    <div id="right-panel" class="right-panel">

        <!-- Header-->
        <header id="header" class="header">

            <div class="header-menu">

                <div class="col-sm-7">
                    <a id="menuToggle" class="menutoggle pull-left"><i class="fa fa fa-tasks"></i></a>
                    <div class="header-left">
                        <button class="search-trigger"><i class="fa fa-search"></i></button>
                        <div class="form-inline">
                            <form class="search-form">
                                <input class="form-control mr-sm-2" type="text" placeholder="Search ..." aria-label="Search">
                                <button class="search-close" type="submit"><i class="fa fa-close"></i></button>
                            </form>
                        </div>

                       

                        
                    </div>
                </div>

                <div class="col-sm-5">
                    <div class="user-area dropdown float-right">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img class="user-avatar rounded-circle" src="<?php echo base_url("assets/images/admin.jpg");?>" alt="User Avatar">
                        </a>

                        <div class="user-menu dropdown-menu">
                            <a class="nav-link" href="#"><i class="fa fa-user"></i> My Profile</a>

                            <a class="nav-link" href="#"><i class="fa fa-user"></i> Notifications <span class="count">13</span></a>

                            <a class="nav-link" href="#"><i class="fa fa-cog"></i> Settings</a>

                            <a class="nav-link" href="#"><i class="fa fa-power-off"></i> Logout</a>
                        </div>
                    </div>

                    <div class="language-select dropdown" id="language-select">
                        <a class="dropdown-toggle" href="#" data-toggle="dropdown"  id="language" aria-haspopup="true" aria-expanded="true">
                            <i class="flag-icon flag-icon-mg"></i>
                        </a>
                        
                    </div>

                </div>
            </div>

        </header><!-- /header -->
        <!-- Header-->
  <!-- Right Panel -->

  <div id="right-panel" class="right-panel">

<!-- Header-->



<div class="content mt-3">
    <div class="animated fadeIn">


        <div class="row">
            
            <!--/.col-->

            <div class="col-lg-8">
                <div class="card">
                   
                    <div class="card-body card-block">
                    <div class="row form-group">
                                        
                                    </div>

                                    <div class="col-lg-12">
                                        <div class="card">
                                            <div class="card-header">
                                                <strong>Ajouter</strong> éléments
                                            </div>
                                            <div class="card-body card-block">
                                                <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
                                                   
                                                    <div class="row form-group">
                                                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Text Input</label></div>
                                                        <div class="col-12 col-md-9"><input type="text" id="text-input" name="text-input" placeholder="Text" class="form-control"><small class="form-text text-muted">This is a help text</small></div>
                                                    </div>
                                                  
                                                   
                                                    <div class="row form-group">
                                                        <div class="col col-md-3"><label for="textarea-input" class=" form-control-label">Textarea</label></div>
                                                        <div class="col-12 col-md-9"><textarea name="textarea-input" id="textarea-input" rows="9" placeholder="Content..." class="form-control"></textarea></div>
                                                    </div>
                                                       
                                                        
                                                        
                                                        <div class="row form-group">
                                                          
                                                        
                                                        <div class="row form-group">
                                                            <div class="col col-md-3"><label for="file-input" class=" form-control-label">File input</label></div>
                                                            <div class="col-12 col-md-9"><input type="file" id="file-input" name="file-input" class="form-control-file"></div>
                                                        </div>
                                                        <div class="row form-group">
                                                            <div class="col col-md-3"><label for="file-multiple-input" class=" form-control-label">Multiple File input</label></div>
                                                            <div class="col-12 col-md-9"><input type="file" id="file-multiple-input" name="file-multiple-input" multiple="" class="form-control-file"></div>
                                                        </div>
                                                </form>
                                            </div>
                                            <div class="card-footer">
                                                <button type="submit" class="btn btn-primary btn-sm">
                                                    <i class="fa fa-dot-circle-o"></i> Submit
                                                </button>
                                                <button type="reset" class="btn btn-danger btn-sm">
                                                    <i class="fa fa-ban"></i> Reset
                                                </button>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-header">
                                                <strong>Inline</strong> Form
                                            </div>
                                            <div class="card-body card-block">
                                                <form action="" method="post" class="form-inline">
                                                    <div class="form-group"><label for="exampleInputName2" class="pr-1  form-control-label">Name</label><input type="text" id="exampleInputName2" placeholder="Jane Doe" required="" class="form-control"></div>
                                                    <div class="form-group"><label for="exampleInputEmail2" class="px-1  form-control-label">Email</label><input type="email" id="exampleInputEmail2" placeholder="jane.doe@example.com" required="" class="form-control"></div>
                                                </form>
                                            </div>
                                            <div class="card-footer">
                                                <button type="submit" class="btn btn-primary btn-sm">
                                                    <i class="fa fa-dot-circle-o"></i> Submit
                                                </button>
                                                <button type="reset" class="btn btn-danger btn-sm">
                                                    <i class="fa fa-ban"></i> Reset
                                                </button>
                                            </div>
                                        </div>
                                    </div>

                                    

                                   
                                    
                                   

                                       

                                       

                                        

                                        

                                       
                                    </div>
                                </div><!-- .animated -->
                            </div><!-- .content -->
                        </div><!-- /#right-panel -->
                        <!-- Right Panel -->
        <!-- .content -->
    </div><!-- /#right-panel -->

    <!-- Right Panel -->

    <script src="<?php echo base_url("assets/vendors/jquery/dist/jquery.min.js");?>"></script>
    <script src="<?php echo base_url("assets/vendors/popper.js/dist/umd/popper.min.js");?>"></script>
    <script src="<?php echo base_url("assets/vendors/bootstrap/dist/js/bootstrap.min.js");?>"></script>
    <script src="<?php echo base_url("assets/jsad/main.js");?>"></script>


    <script src="<?php echo base_url("assets/vendors/chart.js/dist/Chart.bundle.min.js");?>"></script>
    <script src="<?php echo base_url("assets/jsad/dashboard.js");?>"></script>
    <script src="<?php echo base_url("assets/jsad/widgets.js");?>"></script>
    <script src="<?php echo base_url("assets/vendors/jqvmap/dist/jquery.vmap.min.js");?>"></script>
    <script src="<?php echo base_url("assets/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js");?>"></script>
    <script src="<?php echo base_url("assets/vendors/jqvmap/dist/maps/jquery.vmap.world.js");?>"></script>
    <script>
        (function($) {
            "use strict";

            jQuery('#vmap').vectorMap({
                map: 'world_en',
                backgroundColor: null,
                color: '#ffffff',
                hoverOpacity: 0.7,
                selectedColor: '#1de9b6',
                enableZoom: true,
                showTooltip: true,
                values: sample_data,
                scaleColors: ['#1de9b6', '#03a9f5'],
                normalizeFunction: 'polynomial'
            });
        })(jQuery);
    </script>

</body>

</html>
