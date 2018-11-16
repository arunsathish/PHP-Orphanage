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
                <h1>Sponsor this Child</h1>

                

                <form class="ui form">
                    <h4 class="ui dividing header">Child's Details</h4>
                    <img class="ui small top aligned circular image" src="https://randomuser.me/api/portraits/men/66.jpg">
                    <span>
                        <div class="description">
                            <div class="ui horizontal list">
                                <div class="item">
                                    <div class="content">
                                        <div>Name:</div> Nagesh
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="content">
                                        <div>Age:</div> 15
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="content">
                                    <div>Class:</div> 2nd Grade
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="content">
                                    <div>Year of enroll:</div> 2017-18
                                    </div>
                                </div>
                            </div>
                        </div>
                    </span>


                    <h4 class="ui dividing header">Sponsor Type</h4>
                    <div class="two fields">
                        <div class="field">
                            <select class="ui fluid dropdown">
                                <option value="">Number of Years</option>
                                <option value="1year">1 Year</option>
                                <option value="2year">2 Years</option>
                                <option value="3year">3 Years</option>
                                <option value="5year">5 Years</option>
                            </select>
                        </div>
                        <div class="field">
                            * 1 year, pay Rs.4800   or $112 USD <br>
                            * 2 year, pay Rs.9600   or $224 USD <br>
                            * 3 year, pay Rs.15000  or $335 USD <br>
                            * 5 year, pay Rs.25000  or $581 USD <br>
                        </div>
                    </div>




                    <h4 class="ui dividing header">Personal Information</h4>
                    <div class="field">
                        <label>Name</label>
                        <div class="two fields">
                            <div class="field">
                                <input type="text" name="shipping[first-name]" placeholder="First Name">
                            </div>
                            <div class="field">
                                <input type="text" name="shipping[last-name]" placeholder="Last Name">
                            </div>
                        </div>
                    </div>

                    <div class="fields">
                        <div class="eight wide field">
                            <label>Email</label>
                            <input type="email" name="email" placeholder="Email Address">
                        </div>
                        <div class="eight wide field">
                            <label>Phone No.</label>
                            <input type="tel" name="phone" placeholder="Phone / Mobile">
                        </div>
                    </div>

                    <div class="field">
                        <label>Billing Address</label>
                        <div class="field">
                        <div class="sixteen wide field">
                            <input type="text" name="shipping[address]" placeholder="Address">
                        </div>
                        </div>
                    </div>
                    <h4 class="ui dividing header">Billing Information</h4>
                    <div class="field">
                        <div class="eight wide field">
                        <label>Amount</label>
                        <input type="number" name="number" min="1" maxlength="16" placeholder="Amount">
                        </div>
                    </div>
                    <div class="field">
                        <div class="eight wide field">
                            <label>Check / DD no.</label>
                            <input type="text" name="card[cvc]" maxlength="3">
                        </div>
                    </div>
                    <div class="ui primary button" tabindex="0">Submit</div>
                </form>

            </div>

            <span class="p-20"></span>

        </div>
    </div>
    
<?php include './components/footer.php'; ?>