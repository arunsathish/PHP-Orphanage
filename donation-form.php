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
                </form>

                <span class="p-20"></span>
            </div>
        </div>

    </div>
    
<?php include './components/footer.php'; ?>