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
            <div class="ui text menu">
                <div class="header item">Members</div>
                <a class="item active">Active Members</a>
                <a class="item">Supporting Members</a>
                <a class="item">Volunteers</a>
                <a class="item">As a Career</a>
            </div>
            
            <h3>Application Form for Membership of Active Member</h3>

            <form class="ui form">
                <div class="field">
                    <label for="member-name">Member Name</label>
                    <input type="text" name="member-name" id="member-name" placeholder="Member Name">
                </div>
                <div class="field">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" placeholder="Email">
                </div>
                <div class="field">
                    <label for="address">Mailing Address</label>
                    <textarea rows="2" id="address"></textarea>
                </div>
                <div class="field">
                    <label for="dob">Date of Birth</label>
                    <input type="date" name="dob" id="dob">
                </div>
                <div class="field">
                    <label for="nationality">Nationality</label>
                    <input type="text" name="nationality" id="nationality">
                </div>
                <div class="field">
                    <label for="qualification">Qualification</label>
                    <input type="text" name="qualification" id="qualification">
                </div>
                <div class="field">
                    <label for="institution">Institution</label>
                    <input type="text" name="institution" id="institution">
                </div>

                <div class="inline fields">
                    <label for="profession">Profession:</label>
                    <div class="field">
                        <div class="ui radio checkbox">
                        <input type="radio" name="profession" tabindex="0" class="hidden" id="business">
                        <label for="business">Business</label>
                        </div>
                    </div>
                    <div class="field">
                        <div class="ui radio checkbox">
                        <input type="radio" name="profession" tabindex="0" class="hidden" id="selfEmploped">
                        <label for="selfEmploped">Self-Employed</label>
                        </div>
                    </div>
                    <div class="field">
                        <div class="ui radio checkbox">
                        <input type="radio" name="profession" tabindex="0" class="hidden" id="student">
                        <label for="student">Student</label>
                        </div>
                    </div>
                    <div class="field">
                        <div class="ui radio checkbox">
                        <input type="radio" name="profession" tabindex="0" class="hidden" id="services">
                        <label for="services">Services</label>
                        </div>
                    </div>
                </div>

                <div class="inline fields">
                    <label for="aoi">Area of Interest:</label>
                    <div class="field">
                        <div class="ui radio checkbox">
                        <input type="radio" name="aoi" tabindex="0" class="hidden" id="programs">
                        <label for="programs">Programs</label>
                        </div>
                    </div>
                    <div class="field">
                        <div class="ui radio checkbox">
                        <input type="radio" name="aoi" tabindex="0" class="hidden" id="administration">
                        <label for="administration">Administration</label>
                        </div>
                    </div>
                    <div class="field">
                        <div class="ui radio checkbox">
                        <input type="radio" name="aoi" tabindex="0" class="hidden" id="promotion">
                        <label for="promotion">Promotion</label>
                        </div>
                    </div>
                    <div class="field">
                        <div class="ui radio checkbox">
                        <input type="radio" name="aoi" tabindex="0" class="hidden" id="fundRaising">
                        <label for="fundRaising">Fund-Raising</label>
                        </div>
                    </div>
                    <div class="field">
                        <div class="ui radio checkbox">
                        <input type="radio" name="aoi" tabindex="0" class="hidden" id="others">
                        <label for="others">Others</label>
                        </div>
                    </div>
                </div>

                <button class="ui primary button" type="submit">Submit</button>
                <button class="ui button" type="reset">Reset</button>
            </form>
            
        </div>
    </div>

    <span class="p-20"></span>

    </div>

<?php include './components/footer.php'; ?>