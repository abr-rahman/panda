<?php require_once "header.php" ?>
<?php
     //database connection
     require_once "database.php";
     $id = $_GET['id'];
    echo $select_query = " SELECT * FROM contacts WHERE id= $id"; 
    // print_r($_GET['id']);

    $result = mysqli_query($db_connect, $select_query);
    $resul_assoc = mysqli_fetch_assoc($result);
    // print_r($resul_assoc['first_name']);
    // print_r($resul_assoc['message']);

    $update_query = "UPDATE messages SET STATUS='read' WHERE id=$id";
    $result = mysqli_query($db_connect, $update_query);
?> 

<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header bg-primary text-white">
                    <h4 class="card-title">Message sent By <?= $resul_assoc['first_name'] . $resul_assoc['last_name'] ?> </h4>
                    <p class="card-text"></p>
                </div>
                <div class="card-body">
                    <table class="table table-borderd table-striped">
                        <tbody>
                            <tr>
                                <td>Phone Number</td>
                                <td><?= $resul_assoc['phone_number'] ?></td>
                            </tr>
                            <tr>
                                <td>E-Mail Adderss</td>
                                <td><?= $resul_assoc['email'] ?></td>
                            </tr>
                            <tr>
                                <td>Message</td>
                                <td><?= $resul_assoc['message'] ?></td>
                            </tr>
                        </tbody>
                        
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
  require_once "footer.php";
?>