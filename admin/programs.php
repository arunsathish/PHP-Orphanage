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
                <h1>Create New Programme Details</h1>
                
                <form class="ui form">
                    <div class="field">
                        <label>Title</label>
                        <div class="eight wide field">
                            <input type="text" name="title" placeholder="Program Title">
                        </div>
                    </div>
                    <div class="field">
                        <label>Target Population</label>
                        <div class="eight wide field">
                            <input type="text" name="target-population" placeholder="Target Population">
                        </div>
                    </div>
                    <div class="field">
                        <label>Geo Location</label>
                        <div class="eight wide field">
                            <input type="text" name="geo" placeholder="Geographic Location">
                        </div>
                    </div>
                    <div class="field">
                        <label>Age Group</label>
                        <div class="eight wide field">
                            <input type="text" name="age-group" placeholder="Age Groups">
                        </div>
                    </div>
                    <div class="field">
                        <label>Desciption</label>
                        <textarea type="text" name="desc" rows="2"></textarea>
                    </div>
                    <div class="field">
                        <label>Objective</label>
                        <textarea type="text" name="objective" rows="2"></textarea>
                    </div>
                    <div class="field">
                        <label>Approach</label>
                        <textarea type="text" name="approach" rows="2"></textarea>
                    </div>
                    <div class="field">
                        <label>Achievements</label>
                        <textarea type="text" name="achievements" rows="2"></textarea>
                    </div>
                    <div class="field">
                        <label>Assessment</label>
                        <textarea type="text" name="assessment" rows="2"></textarea>
                    </div>
                    <button type="submit" class="ui primary button">Submit</button>
                    <button type="reset" class="ui button">Reset</button>
                </form>

            </div>
            <span class="p-20"></span>
        </div>

    </div>
    
<?php include './admin_components/admin_footer.php' ?>