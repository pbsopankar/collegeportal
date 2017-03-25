<?php
$param = base64_decode($_GET["param"]);
if (!empty($param)) {
    MysqlConnection::delete(MysqlConnection::TBL_PRINTER, $param);
    header("location:index.php?page=page=view_printer");
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
                    <a href="index.php?page=add_printer">Add Printer</a>
                </small>
            </h1>
        </div>
        <div class="row">
            <div class="col-xs-12">
                <!-- PAGE CONTENT BEGINS -->
                <div class="row">
                    <div class="col-xs-12">
                        <table id="simple-table" class="table  table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>#</th><!-- srno -->
                                    <th>PRINTER NAME</th>
                                    <th>PRINTER TYPE</th>
                                    <th>ADDRESS</th>
                                    <th>LATITUDE</th>
                                    <th>LONGITUDE</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $result = MysqlConnection::fetchAll(MysqlConnection::TBL_PRINTER);
//                                print_r($result);
                                $srno = 1;
                                foreach ($result as $value) {
                                    $encodeId = base64_encode($value["txtId"]);
//                                    $studentResult =  MysqlConnection::fetchByPrimary(MysqlConnection::TBL_STUDENT, "txtId", $value["txtId"]);
                                    ?>
                                    <tr>
                                        <td><?php echo $srno ?></td><!-- srno -->
                                        <td><?php echo $value["printername"] ?></td>
                                        <td><?php echo $value["printertype"] ?></td>
                                        <td><?php echo $value["address"] ?></td><!-- active -->
                                        <td><?php echo $value["longitude"] ?></td><!-- active -->
                                        <td><?php echo $value["latitude"] ?></td><!-- active -->
                                    </tr>
                                    <?php
                                    $srno++;
                                }
                                ?>
                            </tbody>
                        </table>
                    </div> 
                </div> 
                <div class="hr hr-18 dotted hr-double"></div>
            </div> 
        </div> 
    </div>
</div>
<script>
    function confirmDelete() {
        if (confirm("Are your want to delete this record ??")) {
            return true;
        }
        return false;
    }

</script>