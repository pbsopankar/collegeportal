<?php
session_start();
ob_start();
$userTYpe = $_SESSION["result"][0]["txtUserType"];
?>
<ul class="nav nav-list">
    <li >
        <a href="index.php?page=dashboard">
            <i class="menu-icon fa fa-tachometer"></i>
            <span class="menu-text"> Dashboard </span>
        </a>
    </li>
    <?php
    if ($userTYpe == 1) {
        ?>
        <li class="">
            <a href="index.php?page=view_branch"  >
                <i class="menu-icon fa fa-list"></i>
                <span class="menu-text">Manage&nbsp;Branch</span>
            </a>
        </li>
        <li class="">
            <a href="index.php?page=view_student"  >
                <i class="menu-icon fa fa-list"></i>
                <span class="menu-text">Manage&nbsp;Student</span>
            </a>
        </li>
        <li class="">
            <a href="index.php?page=view_user"  >
                <i class="menu-icon fa fa-desktop"></i>
                <span class="menu-text">Manage&nbsp;Books</span>
            </a>
        </li>
        <li class="">
            <a href="index.php?page=view_order"  >
                <i class="menu-icon fa fa-group"></i>
                <span class="menu-text">Manage&nbsp;Faculty</span>
            </a>
        </li>
        <li class="">
            <a href="index.php?page=view_wallet"  >
                <i class="menu-icon fa fa-list"></i>
                <span class="menu-text">Manage&nbsp;Placement</span>
            </a>
        </li>
        <li class="">
            <a href="index.php?page=view_complaints"  >
                <i class="menu-icon fa fa-list"></i>
                <span class="menu-text">Manage&nbsp;Complaints</span>
            </a>
        </li>
        <li class="">
            <a href="index.php?page=view_complaints"  >
                <i class="menu-icon fa fa-list"></i>
                <span class="menu-text">Manage&nbsp;Gallery</span>
            </a>
        </li>

        <?php
    } else if ($userTYpe == 2) {
        ?>
        <li class="">
            <a href="index.php?page=view_complaints"  >
                <i class="menu-icon fa fa-list"></i>
                <span class="menu-text">Manage&nbsp;Notice</span>
            </a>
        </li>
        <li class="">
            <a href="index.php?page=view_complaints"  >
                <i class="menu-icon fa fa-list"></i>
                <span class="menu-text">Manage&nbsp;Notes</span>
            </a>
        </li>
        <li class="">
            <a href="index.php?page=view_complaints"  >
                <i class="menu-icon fa fa-list"></i>
                <span class="menu-text">Manage&nbsp;Books</span>
            </a>
        </li>

        <?php
    } else {
        ?>
        <li class="">
            <a href="index.php?page=view_complaints"  >
                <i class="menu-icon fa fa-list"></i>
                <span class="menu-text">View Notice</span>
            </a>
        </li>
        <li class="">
            <a href="index.php?page=view_complaints"  >
                <i class="menu-icon fa fa-list"></i>
                <span class="menu-text">Books</span>
            </a>
        </li>
        <li class="">
            <a href="index.php?page=view_complaints"  >
                <i class="menu-icon fa fa-list"></i>
                <span class="menu-text">Forum/Chat</span>
            </a>
        </li>
        <?php
    }
    ?>
    <li class="">
        <a href="logout.php"  >
            <i class="menu-icon fa fa-lock"></i>
            <span class="menu-text">Log Out</span>
        </a>
    </li>
</ul> 