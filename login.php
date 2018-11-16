<?php include './components/header.php'; ?>

    <div class="ui container">

        <!-- Top Navigation Bar -->
        <?php include './components/top-menu.php'; ?>

        <!-- BODY Content -->
        <div class="ui centered grid">
            <h2 class="pt-4">Login Here</h2>
        </div>

        <div class="ui grid">
            <div class="six wide column centered">
                <form action="admin/index.php" method="POST" class="ui form">
                    <div class="field">
                        <label>Username</label>
                        <input type="text" name="username" placeholder="User Name">
                    </div>
                    <div class="field">
                        <label>Password</label>
                        <input type="password" name="password" placeholder="Password">
                    </div>
                    <div>Don't have Account? <a href="signup.php">Sign Up</a></div>
                    <button class="ui primary button" type="submit">Login</button>
                </form>
            </div>
        </div>


    </div>
    
<?php include './components/footer.php'; ?>