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
                <h1>Child Registration Form</h1>
                
                <form class="ui form">
                    <div class="seven wide field">
                        <label>Child Name</label>
                        <input type="text" name="child-name" placeholder="Child's Name">
                    </div>
                    <div class="seven wide field">
                        <label>Date of Birth</label>
                        <input type="date" name="dob">
                    </div>
                    <div class="seven wide field">
                        <label>Year of Enroll</label>
                        <input type="number" min="1900" max="2200" name="dob">
                    </div>
                    <div class="seven wide field">
                        <label>Class / Grade</label>
                        <input type="number" min="1" max="12" name="class">
                    </div>
                    <div class="field">
                        <label>Story Behind</label>
                        <textarea name="story-behind" rows="2"></textarea>
                    </div>
                    <div class="field">
                        <label>Upload Child Image</label>
                        <input type="file" name="pic" accept="image/*">
                    </div>
                    <button type="submit" class="ui primary button">Submit</button>
                    <button type="reset" class="ui button">Reset</button>
                </form>
                
            </div>
        </div>

    </div>
    
<?php include './admin_components/admin_footer.php' ?>