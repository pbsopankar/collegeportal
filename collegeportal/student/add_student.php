<?php
error_reporting(0);
$param = base64_decode($_GET["param"]);
if (isset($param)) {
    $arrval = MysqlConnection::fetchByPrimary(MysqlConnection::TBL_STUDENT, $param, "txtId");
}
if (isset($_POST["btnSubmit"])) {
    unset($_POST["btnSubmit"]);
    if ($param) {
        MysqlConnection::edit(MysqlConnection::TBL_STUDENT, $_POST, $param);
    } else {
        MysqlConnection::insert(MysqlConnection::TBL_STUDENT, $_POST);
    }
    header("location:index.php?page=view_student");
}
?>
<div class="main-content-inner">
    <div class="breadcrumbs ace-save-state" id="breadcrumbs">
        <ul class="breadcrumb">
            <li>
                <i class="ace-icon fa fa-home home-icon"></i>
                <a>Home</a>
            </li>
            <li><?php echo ucwords(str_replace("_", " ", $_GET["page"])) ?></li>
        </ul>
    </div>

    <div class="page-content">
        <div class="page-header">
            <h1>
                <small>
                    <i class="ace-icon fa fa-angle-double-right"></i>
                    <a href="index.php?page=view_student">View Student</a>
                </small>
            </h1>
        </div><!-- /.page-header -->
        <div class="row">
            <div class="col-xs-12">
                <form class="form-horizontal" role="form" method="post" name="frmAddFrom" id="frmAddFrom" enctype="multipart/form-data">
                    <div class="form-group">
                        <label class="col-sm-2 control-label no-padding-right" for="form-field-1-1">BRANCH NAME</label>
                        <div class="col-sm-4">
                            <input type="text" id="form-field-1-1" autofocus="" placeholder="BRANCH NAME" name="txtDeptName" value="<?php echo $arrval["txtDeptName"] ?>"  class="form-control">
                        </div>
                        <label class="col-sm-2 control-label no-padding-right" for="form-field-1-1">ACTIVE</label>
                        <div class="col-sm-4">
                            <input type="text" autofocus="" id="form-field-1-1" name="txtIsActive" placeholder="BALANCE" value="Y" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label no-padding-right" for="form-field-1-1">BRANCH NAME</label>
                        <div class="col-sm-4">
                            <input type="text" id="form-field-1-1" autofocus="" placeholder="BRANCH NAME" name="txtDeptName" value="<?php echo $arrval["txtDeptName"] ?>"  class="form-control">
                        </div>
                        <label class="col-sm-2 control-label no-padding-right" for="form-field-1-1">ACTIVE</label>
                        <div class="col-sm-4">
                            <input type="text" autofocus="" id="form-field-1-1" name="txtIsActive" placeholder="BALANCE" value="Y" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label no-padding-right" for="form-field-1-1">BRANCH NAME</label>
                        <div class="col-sm-4">
                            <input type="text" id="form-field-1-1" autofocus="" placeholder="BRANCH NAME" name="txtDeptName" value="<?php echo $arrval["txtDeptName"] ?>"  class="form-control">
                        </div>
                        <label class="col-sm-2 control-label no-padding-right" for="form-field-1-1">ACTIVE</label>
                        <div class="col-sm-4">
                            <input type="text" autofocus="" id="form-field-1-1" name="txtIsActive" placeholder="BALANCE" value="Y" class="form-control">
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="clearfix form-actions">
            <div class="col-md-offset-3 col-md-9">
                <input type="submit" class="btn btn-info" name="btnSubmit" value="Save" />
                &nbsp; &nbsp; &nbsp;
                <input type="reset" class="btn" value="Clear" />
            </div>
        </div>

        <div class="hr hr-24"></div>
        </form>
        <div class="hr hr-18 dotted hr-double"></div>
    </div><!-- /.col -->
</div><!-- /.row -->
</div><!-- /.page-content -->
</div>