<?php 
    include '../../public/includes/config.php';

    $result = mysqli_query($conn, "SELECT name, phone, category, description
                                    FROM tbl_complains ");

    if (!$result) die('Couldn\'t fetch records');
    $num_fields = mysqli_num_fields($result);
    $headers = array();
    while ($property = mysqli_fetch_field($result)) {
        echo $property->name;
    }
    $fp = fopen('php://output', 'w');
    if ($fp && $result) {
        header('Content-Type: text/csv');
        header('Content-Disposition: attachment; filename="complains-report.csv"');
        header('Pragma: no-cache');
        header('Expires: 0');
        fputcsv($fp, $headers);
        while ($row = $result->fetch_array(MYSQLI_NUM)) {
            fputcsv($fp, array_values($row));
        }
        die;
    }

?>