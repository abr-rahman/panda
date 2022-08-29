<?php require_once "header.php" ?>


<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="card"> 
              <div class="card-header bg-primary">
                <h4 class="card-title">contact us form</h4>
                <p class="card-text">Body</p>
              </div>
              <div class="card-body">
                <form method="post" action="contact_post.php">
                    <div class="form-group m-3">
                        <label for="">First Name</label>
                        <input type="text" class="form-control" name="first_name" placeholder="First Name">
                    </div>
                    <div class="form-group m-3">
                        <label for="">Last Name</label>
                        <input type="text" class="form-control" name="last_name" placeholder="Last Name">
                    </div>
                    <div class="form-group m-3">
                        <label for="">Email Adderss</label>
                        <input type="text" class="form-control" name="email" placeholder="Email Adderss">
                    </div>
                    <div class="form-group m-3">
                        <label for="">Phone Number</label> 
                        <input type="text" class="form-control" name="phone_number" placeholder="Phone Number"> 
                    </div>
                    <div class="form-group m-3">
                        <label for="">Message</label>
                        <textarea class="form-control" rows="2" name="message" placeholder="Message"></textarea>
                    </div>
                    <div class="form-group m-3">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
              </div>
            </div>
        </div>
    </div>
</div>


<?php
  require_once "footer.php";
?>