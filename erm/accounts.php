<?php include '../includes/links.php'; ?>
<?php include '../includes/session.php'; ?>
<body>
<style type="text/css">
  .box {
      -webkit-box-shadow: 0px 1px 8px 1px rgba(140,132,140,1);
      -moz-box-shadow: 0px 1px 8px 1px rgba(140,132,140,1);
      box-shadow: 0px 1px 8px 1px rgba(140,132,140,1);
      padding: 0px; border-radius: 10px;
  }
</style>
    <div class="main-section">

      <!-- START nav -->
      <?php include '../includes/nav.php'; ?>
      <!-- END nav -->

    <section class="ftco-section ftco-section-2" id="javascriptsComponents">
      <div class="container">
        <div class="row">

  <div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">
                <h3>Add Account</h3>
                
            <?php
            if(isset($_POST['submit']))
            {
                $username= $_POST['username'];
                $firstname= ucwords($_POST['fullname']);
                $password = $_POST['password'];
                $password2 = $_POST['password2'];
                if ($password == $password2) {
                    $password = password_hash($password, PASSWORD_DEFAULT);
                    $query = mysqli_query($conn, "INSERT INTO tbl_users (username, fullname, password, type) VALUE ('$username', '$firstname', '$password', 'admin') ");
                    echo '<div class="alert alert-success">
                            <div class="container">
                                <div class="d-flex">
                                    <div class="alert-icon">
                                        <i class="ion-ios-checkmark-circle"></i>
                                    </div>
                                <p class="mb-0 ml-2">
                                    You successfully added new admin!
                                </p>
                                </div>
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true"><i class="ion-ios-close"></i></span>
                                </button>
                            </div>
                        </div>';                    
                }
                else {
                    echo '<div class="alert alert-danger">
                            <div class="container">
                                <div class="d-flex">
                                    <div class="alert-icon">
                                        <i class="ion-ios-checkmark-circle"></i>
                                    </div>
                                <p class="mb-0 ml-2">
                                    Password is not match!
                                </p>
                                </div>
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true"><i class="ion-ios-close"></i></span>
                                </button>
                            </div>
                        </div>';
                }
            }

            ?>
                <form method="POST" action="accounts.php">
                    <div class="row">
                        <div class="col-12">
                            <label>Username</label>
                            <input type="text" class="form-control" name="username" required>
                        </div>
                        <div class="col-12">
                            <label>Fullname</label>
                            <input type="text" class="form-control capitalized" name="fullname" required>
                        </div>
                        <div class="col-12">
                            <label>Password</label>
                            <input type="password" class="form-control" name="password" required>
                        </div>
                        <div class="col-12">
                            <label>Re-type Password</label>
                            <input type="password" class="form-control" name="password2" required>
                        </div>
                    </div>
                    <br>
                    <center>
                        <button type="submit" name="submit" class="btn btn-primary btn-round">
                            Save Account
                        </button>
                    </center>
                </form>
            </div>

          <div class="col-md-6">
            <table class="table text-center table-responsive">
              <thead>
                  <tr>
                      <th>#</th>
                      <th>FullName</th>
                      <th>Username</th>
                      <th>Type</th>
                      <th>Actions</th>
                  </tr>
              </thead>
              <tbody>
                <?php
                $result = mysqli_query($conn, "SELECT * FROM tbl_users WHERE id != 1");
                $count= 1;
                foreach($result as $row) {

                ?>
                  <tr id="info<?php echo $row['id']; ?>">
                      <td ><?php echo $count++ ?></td>
                      <td><?php echo $row['fullname'] ?></td>
                      <td><?php echo $row['username'] ?></td>
                      <td><?php echo $row['type'] ?></td>
                      <td class="td-actions">
                          <a href="edit-accounts.php?id=<?php echo $row['id'] ?>" rel="tooltip" class="btn btn-success btn-round"><i class="fa fa-edit"></i></a>
                          <a href="../includes/query/delete_user.php?delete=<?php echo $row['id']; ?>" rel="tooltip" class="btn btn-danger btn-round text-white deleteaccount"><i class="fa fa-trash"></i></a>
                      </td>
                  </tr>

                <?php } ?>



              </tbody>
          </table>
         </div>
        </div>
    </div>
  </div>

        </div>
      </div>
    </section>
      <!-- - - - - -end- - - - -  -->

  <!-- <?php include '../includes/footer.php'; ?> -->
  </div>
  <?php include '../includes/loader.php'; ?>
</body>
<?php include '../includes/cores.php'; ?>