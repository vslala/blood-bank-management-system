<?php
$i=0;
require_once 'php/DBConnect.php';
$db = new DBConnect();
$users = $db->getUsers();

$title="Members Area";$setMemberActive="active";
include 'layout/_header.php';

include 'layout/_top_nav.php';
?>

<div class="container">
    <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-10">
            <?php if(isset($users)): $i++;?>
            <table class="table table-condensed">
                <thead>
                <th>Name</th>
                <th>Email</th>
                <th>D.O.B</th>
                <th>Gender</th>
                <th>Blood Group</th>
                <th>Address</th>
                <th>City</th>
                <th>Mobile</th>
                </thead>
                <?php foreach($users as $u): ?>
                <tr class="<?php if($i%2==0){echo 'bg-primary';}else{echo 'bg-success';} ?>">
                    <td><?= $u['first_name']." ".$u['last_name']; ?></td>
                    <td><?= $u['email']; ?></td>
                    <td><?= $u['dob']; ?></td>
                    <td><?= $u['gender']; ?></td>
                    <td><?= $u['b_type']; ?></td>
                    <td><?= wordwrap($u['address'], 26, '<br>'); ?></td>
                    <td><?= $u['city']; ?></td>
                    <td><?= $u['mobile']; ?></td>
                </tr>
                <?php endforeach; ?>
            </table>
            <?php endif; ?>
        </div>
        <div class="col-md-1"></div>
    </div>
</div>

<?php include 'layout/_footer.php'; ?>
