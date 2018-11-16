<?php include './components/header.php'; ?>

    <div class="ui container">

        <!-- Top Navigation Bar -->
        <?php include './components/top-menu.php'; ?>

        <!-- BODY Content -->
        <div class="ui centered grid">
            <h2 class="pt-4">Sign Up Here</h2>
        </div>

        <div class="ui grid">
            <div class="six wide column centered">
                <form class="ui form">
                    <div class="field">
                        <label>Username</label>
                        <input type="text" name="username" placeholder="User Name">
                    </div>
                    <div class="field">
                        <label>Password</label>
                        <input type="password" name="password" placeholder="Password">
                    </div>
                    <div class="field">
                        <label>Password - Retype</label>
                        <input type="password" name="password" placeholder="Retype Password">
                    </div>
                    <div>Already have Account? <a href="login.php">Login</a></div>
                    <button class="ui primary button" type="submit">Sign up</button>
                </form>
            </div>
        </div>


    </div>
    
<?php include './components/footer.php'; ?>