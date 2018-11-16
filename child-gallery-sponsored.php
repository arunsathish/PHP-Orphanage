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
                
                <h1>Child Gallery</h1>
                
                <div class="ui pointing menu">
                    <a class="item active" href="child-gallery-sponsored.php">
                        Sponsored Children
                    </a>
                    <a class="item" href="child-gallery-unsponsored.php">
                        Not Sponsored Children
                    </a>
                </div>

                <div class="ui segment">
                    <div class="ui divided items">

                        <div class="item">
                            <div class="ui image">
                                <img src="https://randomuser.me/api/portraits/men/66.jpg">
                            </div>
                            <div class="content">
                                <div class="meta">
                                    <span><strong>Child Details:</strong></span>
                                </div>
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
                                <div class="extra">
                                    <div class="meta">
                                        <span><strong>Sponsor's Details</strong></span>
                                    </div>
                                    <div class="ui horizontal list">
                                        <div class="item">
                                            <div class="content">
                                                <div>Name:</div> KLVN Narayana
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="content">
                                                <div>Email ID:</div> katikareddy@gmail.com
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>

            <span class="p-20"></span>
        </div>

    </div>
    
<?php include './components/footer.php'; ?>