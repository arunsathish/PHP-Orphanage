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
                <h1>Send a Gift</h1>

                <form class="ui form">
                    <h4 class="ui dividing header">Child's Details</h4>
                    <?php
                        if(isset($_GET['cid'])) {
                            $cid = $_GET['cid'];
                        }

                        $sql = "SELECT cid, cname, cdob, cyoe, cclass FROM children WHERE cid='$cid' ";

                        $result = $conn->query($sql);

                        if ($result->num_rows > 0) {
                            // output data of each row
                            while($row = $result->fetch_assoc()) {
                                $dob = $row["cdob"];
                                $age = (date('Y') - date('Y',strtotime($dob)));
                    ?>

                    <div class="description">
                        <div class="ui horizontal list">
                            <div class="item">
                                <div class="content">
                                    <div>Name:</div> <strong><?php echo $row["cname"]; ?></strong> 
                                </div>
                            </div>
                            <div class="item">
                                <div class="content">
                                    <div>Age:</div> <strong><?php echo $age; ?></strong>
                                </div>
                            </div>
                            <div class="item">
                                <div class="content">
                                <div>Class:</div> <strong><?php echo $row["cclass"]; ?></strong>
                                </div>
                            </div>
                            <div class="item">
                                <div class="content">
                                <div>Year of enroll:</div> <strong><?php echo $row["cyoe"]; ?></strong>
                                </div>
                            </div>
                        </div>
                    </div>

                    <?php
                            }
                        } else {
                            echo "0 results";
                        }
                    ?>
                    <br>
                    <div class="field">
                        <label>Type of Gift</label>
                        <input type="text" name="gift_type" placeholder="Eg. Dress, Toy,..">
                    </div>

                    <div class="field">
                        <label>Sending Date</label>
                        <input type="date" name="sending_date">
                    </div>

                    <h4 class="ui dividing header">Personal Information</h4>
                    <div class="field">
                        <label>Full Name</label>
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

                    
                    </div>
                </form>

                <span class="p-20"></span>
            </div>
        </div>

    </div>
    
<?php include './components/footer.php'; ?>