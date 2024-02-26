<?php
$admin_url = ADMIN_URL; ?>
<div class="sidebar">
        <ul>
            <li><a href="<?=$admin_url;?>/dashboard.php">Dashboard</a></li>
            <li><a href="<?=$admin_url;?>/categories/list.php">Categories</a></li>
            <li><a href="<?=$admin_url;?>/books/list.php">Books</a></li>
            <li><a href="<?=$admin_url;?>/users/list.php">Users</a></li>
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