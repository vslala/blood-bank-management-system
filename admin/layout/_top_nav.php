
<nav class="nav navbar-default navbar-fixed-top">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="logo-left-15 pull-left">
                    <div class="h4" id="logo"><a href="index.php">Blood Donation Management</a></div>
                </div>
            </div>
            <div class="col-md-4"></div>
            <div class="col-md-4">
                <div class="pull-right">
                    <ul class="nav nav-pills">
                        <li class="<?php if (isset($setHomeActive)) { echo $setHomeActive; } else { echo '';}?>"><a href="index.php">Home</a></li>
                        <li class="<?php if (isset($setEmployeeActive)) { echo $setEmployeeActive; } else { echo '';}?>"><a href="employee.php">Employees</a></li>
                        
                    </ul>
                </div>
            </div>
        </div>
    </div>


</nav>
        

