        <?php 
        ob_start();
          include '../config.php';

          if(isset($_GET['delete'])){
            $id = $_GET['delete'];

            $result = mysqli_query($conn, "UPDATE tbl_complains SET status='1' WHERE id='$id' ");

            header("Location: ../../../admin/table-complaints.php");
            
          }

        ?>