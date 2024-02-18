<?php
$admin_url = "http://localhost/library-management-system/admin/"; ?>
<div class="sidebar">
        <ul>
            <li><a href="./dashboard.php">Dashboard</a></li>
            <li><a href="<?=$admin_url;?>/categories/list.php">Categories</a></li>
            <li><a href="./list.php">List Design</a></li>
            <li class="dropdown">
                <a href="#">Settings</a>
                <div class="dropdown-content">
                    <a href="#">General</a>
                    <a href="#">Profile</a>
                    <a href="#">Security</a>
                </div>
            </li>
        </ul>
    </div>