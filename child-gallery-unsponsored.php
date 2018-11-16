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
                    <a class="item" href="child-gallery-sponsored.php">
                        Sponsored Children
                    </a>
                    <a class="item active" href="child-gallery-unsponsored.php">
                        Not Sponsored Children
                    </a>
                </div>
                <div class="ui segment">
                    
                    <div class="ui divided items">
                        <div class="item">
                            <div class="ui image">
                            <img src="https://randomuser.me/api/portraits/men/66.jpg">
                            </div>
                            <div class="middle aligned content">
                            <div class="header">
                                Child's Detail
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
                                <a class="ui right button">Donate</a>
                                <a class="ui right button" href="sponsor-children.php">Sponsor</a>
                                <a class="ui right button">Send a gift</a>
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