<div class="main-content-inner">
    <div class="breadcrumbs ace-save-state" id="breadcrumbs">
        <ul class="breadcrumb">
            <li>
                <i class="ace-icon fa fa-home home-icon"></i>
                <a href="#">Home</a>
            </li>
            <li class="active">Dashboard</li>
        </ul><!-- /.breadcrumb -->
    </div>

    <div class="page-content">
        <div class="page-header">
            <h1>
                Dashboard
                <small>
                    <i class="ace-icon fa fa-angle-double-right"></i>
                    Overview &amp;Statistics 
                </small>
            </h1>
        </div><!-- /.page-header -->

        <div class="row">
            <div class="col-xs-12">
                <div class="row">
                    <div class="space-6"></div>
                    <div class="vspace-12-sm"></div>
                    <div class="col-sm-12">
                        <div class="widget-box">
                            <div class="widget-header widget-header-flat widget-header-small">
                                <h5 class="widget-title">
                                    <i class="ace-icon fa fa-signal"></i>
                                    Daily Analysis 
                                </h5>
                            </div>

                            <div class="widget-body">
                                <div class="widget-main">
                                    <div id="piechart-placeholder"></div>
                                    <div class="hr hr8 hr-dotted"></div>
                                    <div class="clearfix">
                                        <div class="grid3">
                                            <?php
                                            include './report_1.php';
                                            ?>
                                        </div>
                                        <div class="grid3">
                                            <?php
                                            include './report_company.php';
                                            ?>
                                        </div>

                                        <div class="grid3">
                                            <?php
                                            include './report_placement.php';
                                            ?>
                                        </div>
                                    </div>
                                </div><!-- /.widget-main -->
                            </div><!-- /.widget-body -->
                        </div><!-- /.widget-box -->
                    </div><!-- /.col -->
                </div><!-- /.row -->
                <div class="hr hr32 hr-dotted"></div>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.page-content -->
</div>
