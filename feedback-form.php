<?php include './components/header.php'; ?>

    <div class="ui container">

        <!-- Top Navigation Bar -->
        <?php include './components/top-menu.php'; ?>

        <!-- BODY Content -->
        <div class="ui grid">
            <!-- Left menu -->
            <?php include './components/side-menu.php'; ?>
            
            <!-- right content -->
            <div class="twelve wide column">
                <h1>Feed Back</h1>
                
                <form class="ui form">
                    <div class="field">
                        <label>Name</label>
                        <div class="two fields">
                          <div class="field">
                            <input type="text" name="first-name" placeholder="First Name">
                          </div>
                          <div class="field">
                            <input type="text" name="last-name" placeholder="Last Name">
                          </div>
                        </div>
                    </div>
                    <div class="field">
                        <label>Address</label>
                        <div class="field">
                          <div class="sixteen wide field">
                            <input type="text" name="address" placeholder="Address">
                          </div>
                        </div>
                    </div>
                    <div class="field">
                        <label>Phone No.</label>
                        <div class="field">
                          <div class="eight wide field">
                            <input type="tel" name="phone" placeholder="Phone / Mobile">
                          </div>
                        </div>
                    </div>
                    <div class="field">
                        <label>Email Address</label>
                        <div class="field">
                          <div class="eight wide field">
                            <input type="email" name="email" placeholder="Email ID">
                          </div>
                        </div>
                    </div>
                    <div class="field">
                        <label>Comments</label>
                        <textarea rows="2"></textarea>
                    </div>
                    <button class="ui primary button" type="submit">Submit</button>
                    <button class="ui button" type="reset">Reset</button>
                </form>

                <span class="p-20"></span>

            </div>
        </div>

    </div>
    
<?php include './components/footer.php'; ?>