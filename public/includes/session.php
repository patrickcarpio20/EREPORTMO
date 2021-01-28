<?php 
    // ob_start();
    session_start();
    $session_id = session_id();
    //eto lang ilalagay sa bawat form para mag log out pag wala pang naka login na username
    if (empty($_SESSION['id'])) {
        echo header("Location: index.php?logout=yes");
    }
    $thisDay = date('F j, Y');

    $id = $_SESSION['id'];
    $session = mysqli_query($conn, "SELECT * FROM tbl_users WHERE id = '$id' ");
    $row = mysqli_fetch_array($session);
    $fullname = $row['fullname'];
    $username = $row['username'];
    $type = $row['type'];
    $status = $row['status'];
?>