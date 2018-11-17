        <!-- Top Navigation Bar -->
        <div class="ui menu">
            <div class="header item">
                Orphan Foundation Development
            </div>
            <a class="item" href="index.php">Home</a>
            <div class="right menu">
                <a href="member-active.php" class="item">Members</a>

                <?php
                    if (empty($_SESSION['user_id'])) {
                        echo '<a class="item" href="login.php">Login</a>';
                    } else {
                        echo '<a class="item" href="admin/index.php">Admin</a>';
                    }
                ?>

            </div>
        </div>