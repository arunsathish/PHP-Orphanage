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
                <h1>Newsletter</h1>

                <form class="ui form">
                    <div class="seven wide field">
                        <label>Issue</label>
                        <input type="text" name="issue">
                    </div>
                    <div class="field">
                        <label>Story</label>
                        <textarea name="story" rows="2"></textarea>
                    </div>
                    <div class="field">
                        <label>Month</label>
                        <select class="ui search dropdown">
                            <option value="" disabled selected>Month</option>
                            <option value="jan">January</option>
                            <option value="feb">February</option>
                            <option value="march">March</option>
                            <option value="april">April</option>
                            <option value="may">May</option>
                            <option value="june">June</option>
                            <option value="july">July</option>
                            <option value="aug">August</option>
                            <option value="sept">September</option>
                            <option value="oct">October</option>
                            <option value="nov">November</option>
                            <option value="dec">December</option>
                        </select>
                    </div>
                    <button type="submit" class="ui primary button">Submit</button>
                    <button type="reset" class="ui button">Reset</button>
                </form>

            </div>
        </div>

    </div>
    
<?php include './admin_components/admin_footer.php' ?>