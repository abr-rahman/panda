<?php
      //database connection
      require_once "database.php";

      $select_query = "SELECT * FROM contacts";
      // query run
      $result_db = mysqli_query($db_connect, $select_query);
      // foreach($result_db as $final_result){
      //   print_r($final_result['first_name']);
      //   print_r($final_result['last_name']);
      //   print_r($final_result['phone_number']);
      //   print_r($final_result['email']);
      //   print_r($final_result['message']);
      // }
      //print_r($result_db);
      //print_r ($db_connect);

     // print_r($result_db -> num_rows);
?>



<?php require_once "header.php" ?>


  <body>
    
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="card">
            <div class="card-header bg-success text-white">
              <h2 class="card-title">All Messages (<?= $result_db -> num_rows ?>)</h2>
              <p class="card-text">Message form contact</p>
            </div>
            <div class="card-body">
              <table id="contact_m_table" class="table">
                <thead>
                  <tr>
                    <th>Serial No</th>
                    <th>ID</th>
                    <!-- <th>First Name</th>
                    <th>Last Name</th> -->
                    <th>Full Name</th>
                    <!-- <th>Phone Number</th> -->
                    <th>Email Address</th>
                    <th>Status</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>

                <?php 
                   $serial_no = 1;
                   foreach($result_db as $final_result) : 
                ?>

                    <tr>
                      <td><?= $serial_no++ ?></td>
                      <td><?= $final_result['id'] ?></td>
                      <!-- <td><//?= ucfirst(strtolower($final_result['first_name'])) ?></td>
                      <td><//?= ucfirst(strtolower($final_result['last_name']))  ?></td> -->
                      <td><?= ucfirst(strtolower($final_result['first_name'])) ." ". ucfirst(strtolower($final_result['last_name']))?></td>
                      <!-- <td><//?= $final_result['phone_number'] ?></td> -->
                      <td><?=strtolower($final_result['email']) ?></td>
                      <td><?=strtolower($final_result['Status']) ?></td>
                      <td>
                        <a href="m_details.php?id=<?= $final_result['id'] ?>" class="btn btn-success">Read</a>
                        <a href="m_delete.php?id=<?= $final_result['id'] ?>" class="btn btn-danger">Delete</a>
                      </td>
                    </tr>
                 
                  <?php endforeach ?>
                  
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


  