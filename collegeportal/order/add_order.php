<?php error_reporting(0);
$param = base64_decode($_GET["param"]);
if (isset($param)) {
    $arrval = MysqlConnection::fetchByPrimary(MysqlConnection::TBL_ORDER, $param, "txtId");
}
if (isset($_POST["btnSubmit"])) {
    unset($_POST["btnSubmit"]);
    if ($param) {
        MysqlConnection::edit(MysqlConnection::TBL_ORDER, $_POST, $param);
    } else {
        MysqlConnection::insert(MysqlConnection::TBL_ORDER, $_POST);
    }
    header("location:index.php?page=view_order");
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
                    <a href="index.php?page=view_order">View Order</a>
                </small>
            </h1>
        </div><!-- /.page-header -->
        <div class="row">
            <div class="col-xs-12">
  <form class="form-horizontal" role="form" method="post" name="frmAddFrom" id="frmAddFrom" enctype="multipart/form-data">
                    <div class="form-group">
                        <label class="col-sm-2 control-label no-padding-right" for="form-field-1-1">PIC URL</label>
                        <div class="col-sm-4">
                            <input type="text" autofocus="" id="form-field-1-1" name="picurl" placeholder="PIC URL" value="<?php echo $arrval["picurl"] ?>" class="form-control">
                        </div>
                        <label class="col-sm-2 control-label no-padding-right" for="form-field-1-1">COLOR COUNT</label>
                        <div class="col-sm-4">
                            <input type="text" autofocus="" id="form-field-1-1" name="colorcount" placeholder="COLOR COUNT" value="<?php echo $arrval["colorcount"] ?>" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label no-padding-right" for="form-field-1-1">BLACK COUNT</label>
                        <div class="col-sm-4">
                            <input type="text" autofocus="" id="form-field-1-1" name="blackcount" placeholder="BLACK COUNT" value="<?php echo $arrval["blackcount"] ?>" class="form-control">
                        </div>
                        <label class="col-sm-2 control-label no-padding-right" for="form-field-1-1">AMOUNT</label>
                        <div class="col-sm-4">
                            <input type="text" autofocus="" id="form-field-1-1" name="amount" placeholder="AMOUNT" value="<?php echo $arrval["amount"] ?>" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label no-padding-right" for="form-field-1-1">COUNT</label>
                        <div class="col-sm-4">
                            <input type="text" autofocus="" id="form-field-1-1" name="count" placeholder="COUNT" value="<?php echo $arrval["count"] ?>" class="form-control">
                        </div>
                        <label class="col-sm-2 control-label no-padding-right" for="form-field-1-1">ENTRY DATE</label>
                        <div class="col-sm-4">
                              <input type="text" autofocus="" id="form-field-1-1" name="adddate" value="<?php echo date("y-m-d")?>" class="form-control">
                        </div>
                     </div>
                     <div class="form-group">
                        <label class="col-sm-2 control-label no-padding-right" for="form-field-1-1">ACTIVE</label>
                        <div class="col-sm-4">
                            <input type="text" id="form-field-1-1"  name="isActive"  disab   led="" value="Y"  value="<?php echo $arrval["isActive"] ?>"  class="form-control">
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