<?php
echo view('Admin/admin-sidebar');

?>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>


<style>
    .sidebarTitle {
        display: flex;
        justify-content: center;
    }
</style>

<div class="w3-container w3-light-grey mt-4 p-3">
    <h3 class="sidebarTitle">Contact Form</h3>
</div>

<table class="table mt-5">
    <thead class="thead-dark">
        <tr>
            <th scope="col">No.</th>
            <th scope="col">Name</th>
            <th scope="col">Number</th>
            <th scope="col">Email address</th>
            <th scope="col">Subject</th>
            <th scope="col">Message</th>
            </th>
            <th scope="col">Contact date</th>

        </tr>
    </thead>
    <tbody>
        <?php
        $num = 1;
        foreach ($contact as $con) {
        ?>
            <tr>
                <th scope="row"><?php echo $num;  ?></th>
                <td><?php echo $con['name'] ?></td>
                <td><?php echo $con['num'] ?></td>
                <td><?php echo $con['mail'] ?></td>      
                <td><?php echo $con['subject'] ?></td>
                <td><?php echo $con['msge']; ?> </td>
                <td><?php echo $con['contact_date'];
                    $num++;
                    ?></td>
               
            </tr>

        <?php

        }
        ?> 
    </tbody>
</table>