<?php
error_reporting(0);
session_start();
//include './IConstat.php';
include './MySql.php';
$page = $_GET["page"];

if (!isset($_SESSION["result"])) {
    header("location:login.php");
}

$explod = explode("_", $page);
if (count($explod) == 2) {
    $pagename = $page;
    $dirname = $explod[1];
    $page = $dirname . "/" . $pagename;
} else {
    $page = "dashboard";
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <meta charset="utf-8" />
        <title><?php echo IConstat::TITLE ?></title>
        <meta name="description" content="overview &amp; stats" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
        <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
        <link rel="stylesheet" href="assets/font-awesome/4.5.0/css/font-awesome.min.css" />
        <link rel="stylesheet" href="assets/css/fonts.googleapis.com.css" />
        <link rel="stylesheet" href="assets/css/ace.min.css" class="ace-main-stylesheet" id="main-ace-style" />
        <link rel="stylesheet" href="assets/css/ace-skins.min.css" />
        <link rel="stylesheet" href="assets/css/ace-rtl.min.css" />
        <script src="assets/js/ace-extra.min.js"></script>
        <script src="js/chart.js"></script>
    </head>
    <body class="no-skin">
        <div id="navbar" class="navbar navbar-default          ace-save-state">
            <div class="navbar-container ace-save-state" id="navbar-container">
                <div class="navbar-header pull-left">
                    <a href="index.php" class="navbar-brand">
                        <small><i class="fa fa-leaf"></i>&nbsp;<?php echo IConstat::TITLE ?></small>
                    </a>
                </div>
            </div>
        </div>
        <div class="main-container ace-save-state" id="main-container">
            <!--- loading left menus --->
            <div id="sidebar" class="sidebar responsive ace-save-state">
                <?php include './menus.php'; ?>
            </div>
            <!--- loading left menus --->
            <!-- loading main-content -->
            <div class="main-content">
                <?php
                include $page . ".php";
                ?>
            </div>
            <!-- loading main-content -->
            <div class="footer">
                <div class="footer-inner">
                    <div class="footer-content">
                        <span class="bigger-120">
                            <span class="blue bolder">Printing Press Application</span>&nbsp; 
                        </span>
                    </div>
                </div>
            </div>
        </div><!-- /.main-container -->
        <script src="assets/js/jquery-2.1.4.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/jquery-ui.custom.min.js"></script>
        <script src="assets/js/jquery.ui.touch-punch.min.js"></script>
        <script src="assets/js/jquery.easypiechart.min.js"></script>
        <script src="assets/js/jquery.sparkline.index.min.js"></script>
        <script src="assets/js/jquery.flot.min.js"></script>
        <script src="assets/js/jquery.flot.pie.min.js"></script>
        <script src="assets/js/jquery.flot.resize.min.js"></script>
        <script src="assets/js/ace-elements.min.js"></script>
        <script src="assets/js/ace.min.js"></script>
        <script src="assets/js/jquery.dataTables.min.js"></script>
        <script src="assets/js/jquery.dataTables.bootstrap.min.js"></script>
        <script src="assets/js/dataTables.buttons.min.js"></script>
        <script src="assets/js/buttons.flash.min.js"></script>
        <script src="assets/js/buttons.html5.min.js"></script>
        <script src="assets/js/buttons.print.min.js"></script>
        <script src="assets/js/buttons.colVis.min.js"></script>
        <script src="assets/js/dataTables.select.min.js"></script>
    </body>
</html>
