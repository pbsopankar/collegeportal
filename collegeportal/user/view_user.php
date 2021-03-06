<?php
$param = base64_decode($_GET["param"]);
if (!empty($param)) {
    MysqlConnection::delete(MysqlConnection::TBL_REGISTRATION, $param);
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
                    <a href="index.php?page=add_user">Add User</a>
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
                                    <th></th><!-- srno -->
                                    <th></th><!-- edit -->
                                    <th></th><!-- delete -->
                                    <th>NAME</th>
                                    <th>CONTACT</th>
                                    <th>EMAIL ID</th>
                                    <th>PASSWORD</th>
                                    <th>DATE</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $result = MysqlConnection::fetchAll(MysqlConnection::TBL_REGISTRATION);
//                                print_r($result);
                                $srno = 1;
                                foreach ($result as $value) {
                                    $encodeId = base64_encode($value["txtId"]);
                                    ?>
                                    <tr>
                                        <td><?php echo $srno ?></td><!-- srno -->
                                        <td>
                                            <a href="index.php?page=add_student&param=<?php echo $encodeId ?>">
                                                <i class="ace-icon fa fa-edit"></i>
                                            </a>
                                        </td><!-- edit -->
                                        <td>
                                            <a  onclick="return confirmDelete()"  href="index.php?page=view_student&param=<?php echo $encodeId ?>">
                                                <i class="ace-icon fa fa-close"></i>
                                            </a>
                                        </td><!-- delete -->
                                        <td><?php echo $value["fullName"] ?></td>
                                        <td><?php echo $value["mobileNo"] ?></td><!-- active -->
                                        <td><?php echo $value["emailId"] ?></td>
                                        <td><?php echo $value["password"] ?></td><!-- active -->
                                        <td><?php echo $value["entrydate"] ?></td><!-- active -->
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