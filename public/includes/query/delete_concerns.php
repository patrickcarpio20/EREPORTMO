        <?php 
        ob_start();
          include '../config.php';

          if(isset($_GET['delete'])){
            $id = $_GET['delete'];

            $result = mysqli_query($conn, "DELETE FROM tbl_concerns WHERE id = $id ");

            header("Location: ../../../admin/table-concerns.php");
            
          }

        ?>