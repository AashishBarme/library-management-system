<?php include('./inc/header.php');?>
<div class="main-content">
        <h2>Login</h2>
        <div class="login-form">
            <form action="#">
                <div class="form-group">
                    <label for="username">Username:</label>
                    <input type="text" id="username" name="username" required>
                </div>
                <div class="form-group">
                    <label for="password">Password:</label>
                    <input type="password" id="password" name="password" required>
                </div>
                <div class="form-group">
                    <button type="submit">Login</button>
                </div>
            </form>
        </div>
    </div>
<?php include('./inc/footer.php');?>