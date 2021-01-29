        <?php 
        ob_start();
          include '../config.php';

          if(isset($_GET['delete'])){
            $id = $_GET['delete'];

            $result = mysqli_query($conn, "DELETE FROM tbl_users WHERE id = $id ");

            header("Location: ../../admin/accounts.php");
            
          }

        ?>