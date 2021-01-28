<?php 
ob_start();
$id = $_GET['id'];

echo "<script>alert('The user notified in their email address.');</script>";
include '../../includes/config.php';

$query = mysqli_query($conn, "SELECT * FROM tbl_crimes WHERE id = '$id' ");
$row = $query->fetch_array();
$newname = $row['name'];

$query = mysqli_query($conn, "UPDATE tbl_crimes SET 
                              crime_status = 'Completed'
                              WHERE id = '$id' ");
// echo $newname;



require("../PHPMailer/src/PHPMailer.php");
require("../PHPMailer/src/SMTP.php");
require("../PHPMailer/src/Exception.php");

$mail = new PHPMailer\PHPMailer\PHPMailer();
$mail->IsSMTP(); 

$mail->CharSet="UTF-8";
$mail->Host = "smtp.gmail.com";
$mail->SMTPDebug = 1; 
$mail->Port = 465 ; //465 or 587

$mail->SMTPSecure = 'ssl';    
$mail->SMTPAuth = true; 
$mail->IsHTML(true);

//Authentication
$mail->Username = "lagunapolicedepartment@gmail.com";
$mail->Password = "admin123?";

//Set Params
$mail->SetFrom("no-reply@howcode.com");
$mail->AddAddress($row['email']);
$mail->Subject = "Hello ".$row['name']."";
$mail->Body = "<!DOCTYPE html>
        <html>
        <head>
            <title></title>
            <style type='text/css'>
                .big{
                    width: 90%;
                    height: 90px;
                    background-color: #0047bb;
                    color: white;
                    text-align: center;
                    padding: 10px;
                    border-top-right-radius: 10px;
                    border-top-left-radius: 10px;
                    margin-bottom: 10px;
                }
                .medium{
                    width: 70%;
                    height: 90px;
                    background-color: white;
                    color: black;
                    text-align: center;
                    padding: 10px;
                    border-radius: 10px;
                    text-align: left;
                    margin-bottom: 10px;
                }
                .medium2{
                    width: 70%;
                    height: 70px;
                    background-color: white;
                    color: black;
                    text-align: center;
                    padding: 10px;
                    border-radius: 10px;
                    text-align: left;
                    margin-bottom: 10px;
                }
                .bot{
                    width: 90%;
                    height: 60px;
                    background-color: #0047bb;
                    color: white;
                    text-align: center;
                    padding: 10px;
                    border-bottom-right-radius: 10px;
                    border-bottom-left-radius: 10px;
                    margin-bottom: 10px;
                }
            </style>
        </head>
        <body>

            <center>
                <div class='big'>
                    <br>
                    <h1>Laguna Police Department</h1>
                </div>

                    <img src='https://i.ibb.co/FKHLndZ/640-cidg-logo-2017-10-29-17-04-08.jpg' style='width: 300px;'>
                <div class='medium'>
                    <h2>Thank you!</h2>
                    <h3>Thank you once again, we completed your report and took an action for that </h3>
                    <h3>We secured your information.</h3>
                    <h3>We hope for more cooperative action for us to manage crimes in our environment.</h3>
                    <h3>Remarks: Completed</h3>
                    <h3>
                    <label>Description: </label><span>".$row['description']."</span>
                    <br>
                    <label>Location: </label><span>".$row['location']."</span>
                    </h3>                    
                </div>
                <div class='medium2'></div>
                <div class='bot'>
                    <h5>Laguna Police Department</h5>
                </div>
            </center>
        </body>
        </html>";
        $mail->Send();

        if ($mail) {
            echo "success";
        }
        header("Location: ../table-crimes.php");

?>