
<nav class="nav navbar-default navbar-fixed-top">
    <div class="container">
        <div class="row">
            <div class="col-md-2">
                <div class="logo-left-15 pull-left">
                    <div class="h4" id="logo"><a href="index.php">Blood Bank </a></div>
                </div>
            </div>
            <div class="col-md-4"></div>
            <div class="col-md-6">
                <div class="pull-right">
                    <ul class="nav nav-pills">
                        <li class="<?php
                        if (isset($setHomeActive)) {
                            echo $setHomeActive;
                        } else {
                            echo '';
                        }
                        ?>"><a href="home.php">Home</a></li>
                        <li class="<?php
                        if (isset($setDonorActive)) {
                            echo $setDonorActive;
                        } else {
                            echo '';
                        }
                        ?>"><a href="donor.php">New Donor</a></li>
                        
                        <li class="<?php if(isset($setMemberActive)) { echo $setMemberActive; } else { echo ''; } ?>">
                            <a href="members.php">Our Members</a>
                        </li>
<!--                        <li class="<?php //if(isset($setBloodRequestActive)){ echo $setBloodRequestActive; } else { echo ''; } ?>">
                            <a href="blood_request.php">Blood Requests</a>
                        </li>-->
                        <li><a href="logout.php">Logout</a></li>
                        
                    </ul>
                </div>
            </div>
        </div>
    </div>


</nav>
        

