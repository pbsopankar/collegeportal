<?php
error_reporting(0);
$param = base64_decode($_GET["param"]);
if (isset($param)) {
    $arrval = MysqlConnection::fetchByPrimary(MysqlConnection::TBL_REGISTRATION, $param, "txtId");
}
if (isset($_POST["btnSubmit"])) {
    unset($_POST["btnSubmit"]);
    if ($param) {
        MysqlConnection::edit(MysqlConnection::TBL_REGISTRATION, $_POST, $param);
    } else {
        $_POST["entrydate"] = date("y-m-d");
        MysqlConnection::insert(MysqlConnection::TBL_REGISTRATION, $_POST);
    }
    header("location:index.php?page=view_user");
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
                    <a href="index.php?page=view_user">View User</a>
                </small>
            </h1>
            
<!--            `id` int(11) NOT NULL,
  `mobileNo` varchar(10) DEFAULT NULL,
  `username` varchar(40) DEFAULT NULL,
  `fullName` varchar(40) DEFAULT NULL,
  `emailId` varchar(40) DEFAULT NULL,
  `password` varchar(20) DEFAULT NULL,
  `entrydate` date DEFAULT NULL,
  `isActive` varchar(1) DEFAULT NULL-->
            
        </div><!-- /.page-header -->
        <div class="row">
            <div class="col-xs-12">
                <form class="form-horizontal" role="form" method="post" name="frmAddFrom" id="frmAddFrom" enctype="multipart/form-data">
                    <div class="form-group">
                        <label class="col-sm-2 control-label no-padding-right" for="form-field-1-1">USER NAME</label>
                        <div class="col-sm-4">
                            <input type="text" autofocus="" id="form-field-1-1" name="username"  value="<?php echo $arrval["username"] ?>" placeholder="USER NAME" class="form-control">
                        </div>
                        <label class="col-sm-2 control-label no-padding-right" for="form-field-1-1">FULL NAME</label>
                        <div class="col-sm-4">
                            <input type="text" id="form-field-1-1"  name="fullName" placeholder="FULL NAME" value="<?php echo $arrval["fullName"] ?>"  class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label no-padding-right" for="form-field-1-1">MOBILE NUMBER</label>
                        <div class="col-sm-4">
                            <input type="text" autofocus="" id="form-field-1-1" name="mobileNo" placeholder="MOBILE NUMBER" value="<?php echo $arrval["mobileNo"] ?>" class="form-control">
                        </div>
                        <label class="col-sm-2 control-label no-padding-right" for="form-field-1-1">EMAIL ID</label>
                        <div class="col-sm-4">
                            <input type="text" id="form-field-1-1"  name="emailId" placeholder="EMAIL ID" value="<?php echo $arrval["emailId"] ?>"  class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label no-padding-right" for="form-field-1-1">PASSWORD</label>
                        <div class="col-sm-4">
                            <input type="text" autofocus="" id="form-field-1-1" name="password" placeholder="PASSWARD" value="<?php echo $arrval["password"] ?>" class="form-control">
                        </div>
                        <label class="col-sm-2 control-label no-padding-right" for="form-field-1-1">ENTRY DATE</label>
                        <div class="col-sm-4">
                            <input type="text" id="form-field-1-1"  name="entrydate" disabled=""   value="<?php echo date("y-m-d") ?>" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label no-padding-right" for="form-field-1-1">ACTIVE</label>
                        <div class="col-sm-4">
                            <input type="text" id="form-field-1-1"  name="isActive"  disabled="" value="Y"  value="<?php echo $arrval["isActive"] ?>"  class="form-control">
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