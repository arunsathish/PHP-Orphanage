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
                <h1>Donation Application</h1>

                <form class="ui form">

                    <h4 class="ui dividing header">Select the program to sponsor</h4>
                    <div class="grouped fields">
                        <label for="program">Programs: </label>
                        <div class="field">
                          <div class="ui radio checkbox">
                            <input type="radio" name="program" tabindex="0" class="hidden" id="aakar">
                            <label for="aakar">AAKAR - the first step</label>
                          </div>
                        </div>
                        <div class="field">
                          <div class="ui radio checkbox">
                            <input type="radio" name="program" tabindex="0" class="hidden" id="ahar">
                            <label for="ahar">AHAR APURTI</label>
                          </div>
                        </div>
                        <div class="field">
                          <div class="ui radio checkbox">
                            <input type="radio" name="program" tabindex="0" class="hidden" id="avsar">
                            <label for="avsar">AVSAR - a chance</label>
                          </div>
                        </div>
                        <div class="field">
                          <div class="ui radio checkbox">
                            <input type="radio" name="program" tabindex="0" class="hidden" id="lakshya">
                            <label for="lakshya">Lakshya</label>
                          </div>
                        </div>
                        <div class="field">
                          <div class="ui radio checkbox">
                            <input type="radio" name="program" tabindex="0" class="hidden" id="parivartan">
                            <label for="parivartan">PARIVARTAN - change of direction</label>
                          </div>
                        </div>
                        <div class="field">
                          <div class="ui radio checkbox">
                            <input type="radio" name="program" tabindex="0" class="hidden" id="uphaar">
                            <label for="uphaar">UPHAAR - gift a smile</label>
                          </div>
                        </div>
                    </div>

                    <div class="field">
                      <label>Amount</label>
                      <input type="number" name="amount" min="1" placeholder="Amount">
                    </div>

                    <h4 class="ui dividing header">Check and Demand Draft</h4>
                    <div class="field">
                      <label>Check / DD no.</label>
                      <input type="text" name="check" placeholder="Check / DD no.">
                    </div>
                    <div class="field">
                      <label>Bank Name</label>
                      <input type="text" name="bank-name" placeholder="Bank Name">
                    </div>
                    <div class="field">
                      <label>Place</label>
                      <input type="text" name="place" placeholder="Place">
                    </div>

                    <h4 class="ui dividing header">Personal Information</h4>
                    <div class="field">
                        <label>Type of Gift</label>
                        <input type="text" name="name" placeholder="Full Name">
                    </div>
                    <div class="field">
                        <label>Email</label>
                        <input type="email" name="email" placeholder="Email">
                    </div>
                    <div class="field">
                        <label>Phone no.</label>
                        <input type="tel" name="email" placeholder="Phone / Mobile">
                    </div>
                    <div class="field">
                        <label>Address</label>
                        <input type="text" name="address" placeholder="Address">
                    </div>
                    <button class="ui primary button" type="submit">Submit</button>
                    <button class="ui button" type="reset">Reset</button>


                </form>

                <span class="p-20"></span>
            </div>
        </div>

    </div>
    
<?php include './components/footer.php'; ?>