        <!-- Top Navigation Bar -->
        <div class="ui menu">
            <div class="header item">
                Orphan Foundation Development
            </div>
            <a class="item" href="index.php">Home</a>
            <div class="right menu">
                <a href="member-active.php" class="item <?php echo ($_SERVER['PHP_SELF'] == "/orphan/member-active.php" ? "active" : "");?>">Members</a>

                <?php
                    if (empty($_SESSION['user_id'])) { 
                ?>
                        <a href="login.php" class="item <?php echo ($_SERVER['PHP_SELF'] == "/orphan/login.php" ? "active" : "");?>">Login</a>
                <?php
                    } else { 
                ?>
                        <a href="admin/index.php" class="item">Admin Panel</a>
                        <a href="logout.php" class="item">Logout</a>
                <?php
                    } 
                ?>

            </div>
        </div>