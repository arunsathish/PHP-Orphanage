<?php include './admin_components/admin_header.php' ?>

    <div class="ui container">

        <!-- Top Navigation Bar -->
        <?php include './admin_components/admin_top-menu.php' ?>

        <!-- BODY Content -->
        <div class="ui grid">
            <!-- Left menu -->
            <?php include './admin_components/admin_side-menu.php' ?>
            
            <!-- right content -->
            <div class="twelve wide column">
                <h1>Member Registration</h1>

                <form class="ui form">
                    <div class="seven wide field">
                        <label>Member Name</label>
                        <input type="text" name="member[name]" placeholder="Name of the Member">
                    </div>
                    <div class="seven wide field">
                        <label>Email Address</label>
                        <input type="email" name="member[email]" placeholder="Email ID">
                    </div>
                    <div class="field">
                        <label>Address</label>
                        <input type="text" name="member[address]">
                    </div>
                    <div class="seven wide field">
                        <label>Mobile No.</label>
                        <input type="tel" name="member[phone]" placeholder="Phone / Mobile">
                    </div>
                    <div class="seven wide field">
                        <label>Member Type</label>
                        <select class="ui search dropdown">
                            <option value="" selected disabled>Member type</option>
                            <option value="ec">Executive Committe</option>
                            <option value="gb">Govering Body</option>
                            <option value="m">Management</option>
                            <option value="s">Staff</option>
                        </select>
                    </div>
                    <div class="field">
                        <label>Upload Member Image</label>
                        <input type="file" name="pic" accept="image/*">
                    </div>

                    <h4 class="ui dividing header">Login Information</h4>
                    <div class="six wide field">
                        <label>Username</label>
                        <input type="text" placeholder="User Name">
                    </div>
                    <div class="six wide field">
                        <label>Password</label>
                        <input type="password" placeholder="Password">
                    </div>
                    <button type="submit" class="ui primary button">Submit</button>
                    <button type="reset" class="ui button">Reset</button>
                </form>

            </div>
            <span class="p-20"></span>
        </div>

    </div>
    
<?php include './admin_components/admin_footer.php' ?>