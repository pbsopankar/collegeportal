<?php
$param = base64_decode($_GET["param"]);
if (!empty($param)) {
    MysqlConnection::delete(MysqlConnection::TBL_ORDER, $param);
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
                    <a href="index.php?page=add_order">Add Order</a>
                </small>
            </h1>
        </div><!-- /.page-header -->

        <div class="row">
            <div class="col-xs-12">
                <!-- PAGE CONTENT BEGINS -->
                <div class="row">
                    <div class="col-xs-12">
                        <table id="simple-table" class="table  table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>#</th><!-- srno -->
                                    <th>EDIT</th><!-- edit -->
                                    <th>DELETE</th><!-- edit -->
                                    <th>PRINTE ID</th><!-- edit -->
                                    <th>USER ID</th><!-- delete -->
                                    <th>PIC URL</th><!-- delete -->
                                    <th>COLOR COUNT</th><!-- delete -->
                                    <th>BLACK COUNT</th><!-- delete -->
                                    <th>AMOUNT</th><!-- delete -->
                                    <th>COUNT</th><!-- delete -->
                                    <th>ADD DATE</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $result = MysqlConnection::fetchAll(MysqlConnection::TBL_ORDER);
                                $srno = 1;
                                foreach ($result as $value) {
//                                    print_r($result);
                                    $encodeId = base64_encode($value["txtId"]);
                                    ?>
                                    <tr>
                                        <td><?php echo $srno ?></td><!-- srno -->
                                        <td>
                                            <a href="index.php?page=add_department&param=<?php echo $encodeId ?>">
                                                <i class="ace-icon fa fa-edit"></i>
                                            </a>
                                        </td><!-- edit -->
                                        <td>
                                            <a  onclick="return confirmDelete()"  href="index.php?page=view_department&param=<?php echo $encodeId ?>">
                                                <i class="ace-icon fa fa-close"></i>
                                            </a>
                                        </td><!-- delete -->
                                        <td><?php echo $value["printeid"] ?></td>
                                        <td><?php echo $value["userId"] ?></td>  
                                        <td><?php echo $value["picurl"] ?></td>
                                        <td><?php echo $value["colorcount"] ?></td>
                                        <td><?php echo $value["blackcount"] ?></td><!-- active -->     
                                        <td><?php echo $value["amount"] ?></td><!-- active -->
                                        <td><?php echo $value["count"] ?></td><!-- active -->
                                        <td><?php echo $value["adddate"] ?></td><!-- active -->
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