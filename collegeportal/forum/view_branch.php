<?php
$param = base64_decode($_GET["param"]);
if (!empty($param)) {
    //MysqlConnection::delete(MysqlConnection::TBL_WALLET, $param);
    //header("location:index.php?page=page=view_branch");
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
                    <a href="index.php?page=add_branch">Add Branch</a>
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
                                    <th>#</th><!-- srno -->
                                    <th>BRANCH NAME</th>
                                    <th>STATUS</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $result = MysqlConnection::fetchAll(MysqlConnection::TBL_BRANCH);
//                                print_r($result);
                                $srno = 1;
                                foreach ($result as $value) {
                                    $encodeId = base64_encode($value["txtId"]);
//                                    $studentResult =  MysqlConnection::fetchByPrimary(MysqlConnection::TBL_STUDENT, "txtId", $value["txtId"]);
                                    ?>
                                    <tr>
                                        <td><?php echo $srno ?></td><!-- srno -->
                                        <td><a href="index.php?page=add_branch&param=<?php echo $encodeId ?>"><i class="ace-icon fa fa-edit"></i></a></td><!-- srno -->
                                        <td><?php echo $value["txtDeptName"] ?></td>
                                        <td><?php echo $value["txtIsActive"] ?></td>

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