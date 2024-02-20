<?php include('./inc/header.php');?>
<div class="main-content">
<form>
        <h2>Form</h2>
        <input type="text" name="username" placeholder="Username" required>
        <input type="password" name="password" placeholder="Password" required>
        <select name="role" required>
            <option value="" disabled selected>Select Role</option>
            <option value="admin">Admin</option>
            <option value="user">User</option>
        </select>
        <input type="submit" value="Submit">
    </form>
</div>
<?php include('./inc/footer.php'); ?>