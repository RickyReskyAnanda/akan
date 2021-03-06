<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aplikasi Buku Besar</title>
    <link href="<?=base_url()?>sets/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?=base_url()?>sets/font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="<?=base_url()?>sets/css/animate.css" rel="stylesheet">
    <link href="<?=base_url()?>sets/css/style.css" rel="stylesheet">
    <link href="<?=base_url()?>sets/css/plugins/toastr/toastr.min.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="<?=base_url()?>sets/node_modules/sweetalert/lib/sweet-alert.css">
    <script src="<?=base_url()?>sets/angularjs/angular.js"></script>
    <script src="<?=base_url()?>sets/angularjs/angular-route.js"></script>
    <script src="<?=base_url()?>sets/app/controller.js"></script>
    <script>
        <?php echo $this->load->view('J_jlnapp.js')?>
    </script>
</head>

<body ng-app="akuntanapp">
    <div id="wrapper">

    <!-- Header start -->
    <nav class="navbar-default navbar-static-side" role="navigation" style="position: fixed;">
        <div class="sidebar-collapse">
            <ul class="nav metismenu" id="side-menu">
                <li class="nav-header">
                    <div class="dropdown profile-element" style="margin-bottom: 10px;"> <span>
                            <img alt="image" width="90px" class="img-circle" src="<?=base_url()?>sets/img/profile_small.jpg" />
                             </span>
                             <span class="clear" ><span class="block m-t-sm"><strong>Muhammad Juanda B</strong></span></span>
                    </div>
                    <div class="logo-element">
                        ABC
                    </div>
                </li>
                <li>
                    <a href="#/"><i class="fa fa-area-chart"></i> <span class="nav-label">Project</span></a>
                </li>
                <li>
                    <a href="#/suplier"><i class="fa fa-th-large"></i> <span class="nav-label">Suplier</span></a>
                </li>
                <li>
                    <a href="#/kontak"><i class="fa fa-th-large"></i> <span class="nav-label">Kontak</span></a>
                </li>
                <li>
                    <a href="#/user"><i class="fa fa-users"></i> <span class="nav-label">Manajemen User</span></a>
                </li>
                <li>
                    <a href="#/user"><i class="fa fa-user"></i> <span class="nav-label">Profile</span></a>
                </li>
            </ul>
        </div>
    </nav>
        <div id="page-wrapper" class="gray-bg">
        <div class="row border-bottom">
            <nav class="navbar navbar-static-top white-bg" role="navigation" style="margin-bottom: 0">
                <div class="navbar-header">
                    <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href=""><i class="fa fa-bars"></i> </a>
                    <form role="search" class="navbar-form-custom" action="http://webapplayers.com/inspinia_admin-v2.3/search_results.html">
                        <div class="form-group">
                            <input type="text" placeholder="Search for something..." class="form-control" name="top-search" id="top-search">
                        </div>
                    </form>
                </div>
                <ul class="nav navbar-top-links navbar-right">
                    <li>
                        <span class="m-r-sm text-muted welcome-message">Welcome to INSPINIA+ Admin Theme.</span>
                    </li>
                    <li>
                        <a href="login.html">
                            <i class="fa fa-sign-out"></i> Log out
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
        <!-- header end -->

        <span ng-view></span>

        <!-- footer start -->
        <div class="footer">
            <div class="pull-right">
                10GB of <strong>250GB</strong> Free.
            </div>
            <div>
                <strong>Copyright</strong> Exomatik &copy; 2016
            </div>
        </div>
        <!-- footer end -->

        </div>
    </div>

    <script src="<?=base_url()?>sets/js/jquery-2.1.1.js"></script>
    <script src="<?=base_url()?>sets/node_modules/angular-sweetalert/SweetAlert.min.js"></script>
    <script src="<?=base_url()?>sets/node_modules/sweetalert/lib/sweet-alert.min.js"></script>
    <script src="<?=base_url()?>sets/js/bootstrap.min.js"></script>
    <script src="<?=base_url()?>sets/js/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="<?=base_url()?>sets/js/plugins/slimscroll/jquery.slimscroll.min.js"></script>
    <!-- Custom and plugin javascript -->
    <script src="<?=base_url()?>sets/js/inspinia.js"></script>
    <script src="<?=base_url()?>sets/js/plugins/pace/pace.min.js"></script>
    <script src="<?=base_url()?>sets/js/plugins/toastr/toastr.min.js"></script>

</body>
</html>
