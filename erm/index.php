<?php 
session_start();
include_once('../public/includes/config.php'); 
?>
<!DOCTYPE html>

<html lang="en">

    <head>
        <title>E-Report Mo!</title>
        <meta name="keywords" content="" />
        <meta name="description" content="" />
<!--
Urbanic Template
https://templatemo.com/tm-395-urbanic
-->
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!--<link rel="shortcut icon" href="PUT YOUR FAVICON HERE">-->
        <link rel="icon" href="../public/images/e-logo.png" type="image/png">
        <!-- Google Web Font Embed -->
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
        
        <!-- Bootstrap core CSS -->
        <link href="../public/css/bootstrap.css" rel='stylesheet' type='text/css'>

        <!-- Custom styles for this template -->
        <link href="../public/js/colorbox/colorbox.css"  rel='stylesheet' type='text/css'>
        <link href="../public/css/templatemo_style.css"  rel='stylesheet' type='text/css'>
        <link href="../public/css/pulse.css" rel='stylesheet' type='text/css'>
        <link href="../public/css/carousel.css" rel='stylesheet' type='text/css'>
        <link href="../public/css/login.css" rel='stylesheet' type='text/css'>
        <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
        <link rel="stylesheet" href="../public/css/alertify.css">

        <link rel="stylesheet" href="../public/css/alertify.min.css">

        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->
        <style type="text/css">
           a{
            color:#fff!important;
           }
           h2 {
               width: 100%; 
               text-align: center; 
               border-bottom: 3px solid #FF7600; 
               line-height: 0.1em;
               margin: 10px 0 20px; 
               color:#FF7600;
            } 

            h2 span { 
                background:#fff; 
                padding:0 10px; 
            }
            textarea {
                font-size: 15px;
                width: 100%;
                display: block;
                border-radius:3px;
                /*overflow: hidden;*/
                min-height: 120px;
                background: transparent;
                position: relative;
                outline: 0;
                resize: none;

                -webkit-box-sizing: border-box;
                -moz-box-sizing: border-box;
                box-sizing: border-box;             
            }
            h6 {
                font-weight: bold;
            }
            .capitalized {
                text-transform: capitalize;
            }
            .text-black {
                color: black;
            }
            .ajs-modal{
                z-index:99999999!important;
            }
            .ajs-header, .ajs-content{
                font-size: 16px!important;
            }
        </style>

        <script src="https://js.pusher.com/7.0/pusher.min.js"></script>

        <script type="text/javascript">

            var pusher = new Pusher('de6e3e8267c7962d2434', {

              cluster: 'ap3'

            });



            var channel = pusher.subscribe('my-channel');

            channel.bind('my-event', function(data) {

              alert(JSON.stringify(data));

            });

        </script>

    </head>

    

    <body>
        <?php
        if(!isset($_SESSION['cid'])):
        ?>
        <div style="position:fixed;width: 100%;height: 100%;z-index: 10000;background-color: rgba(0, 0, 0, 0.9);display:flex;align-items: center;justify-content: center;">
            <center>
            <div style="border-radius: 5px 5px!important;width: 50%!important;padding:5% 5%;background-color:#10395C;">
               <form method="POST" action="verify.php">

                  <img src="../public/images/e-logo.png" alt="Urbanic Template" title="Urbanic Template" style="width:40%;"/>
                  
                  <div class="col-12" style="text-align: left;">
                      <label style="color:#fff;">Login ID <i>(contact number you used on registration)</i>:</label>
                      <input type="text" class="form-control" name="loginid" maxlength="11" onkeypress="return validate(event)">
                  </div>
                  <br>
                  <button type="submit" class="btn btn-primary" style="background-color: #FF7600;">Login</button>
                </form>
            </div> 
            </center>
        </div>
        <?php
        else:
        ?>
        <span style="position: fixed;bottom:10px;right:30px;background-color: #fff;color:#FF7600;font-weight: 700;padding: 1px 5px;z-index: 1000;border-radius: 5px 5px!important;font-size: 16px;border:2px solid #EDB248;box-shadow: 5px 5px 5px #000;">&nbsp;WELCOME TO E-REPORT MO! YOUR SAFETY AND SECURITY IS OUR PRIORITY.</span>
        <?php
        endif
        ?>

        


        <div class="templatemo-top-bar" id="templatemo-top" style="background-color:#10395C!important;">

            <div class="container">

                <div class="subheader">

                    <div id="phone" class="pull-left" style="color:#fff;">

                            

                           Online Crime Reporting System

                    </div>

                    <div id="email" class="pull-right" style="color:#fff;">

                           pnpstacruz@gmail.com

                    </div>

                </div>

            </div>

        </div>

        <div style="background-color:#edb248!important;padding:0!important;">

            <div class="container">

                <!-- Static navbar -->

                <div class="navbar navbar-default" role="navigation" style="background-color:#edb248!important;">

                    <div class="row" style="">

                        <div class="navbar-header">

                                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">

                                <span class="sr-only">Toggle navigation</span>

                                <span class="icon-bar"></span>

                                <span class="icon-bar"></span>

                                <span class="icon-bar"></span>

                                </button>

                                

                        </div>

                        <div class="row navbar-collapse collapse" id="templatemo-nav-bar" style="width:100%;">

                            <div class="row">

                            

                            <div class="col-sm-12">

                            <ul class="nav navbar-nav navbar-right" style="margin-top: 5px;">

                                <!-- <li class="active"><a href="index.php">HOME</a></li>

                                <li><a href="aboutus.php">ABOUT</a></li> -->
                                <li><a href="logout.php">LOGOUT</a></li>
                                <!-- <li><a href="verifyreport.php">REPORT VERIFICATION</a></li> -->

                            </ul>

                            </div>

                            </div>

                        </div><!--/.nav-collapse -->

                    </div><!--/.container-fluid -->

                </div><!--/.navbar -->

            </div> <!-- /container -->

        </div>

        <img src="../public/images/erm-bg.gif" style="width:100%;">
        

        <div class="templatemo-service">
            <div class="container">
                <div class="row">
                    <h2><span>FILE REPORT HERE</span></h2>
                    <div class="col-md-3">
                        <div style="margin-top:30px;">
                            <div class="container">
                                <a href="form-crimes.php">
                                <button class="pulse-button" style="background-image: url(../public/images/crime-img.png)!important;border-radius: 1000px!important;width:200px;height:200px;box-shadow: 0 0 0 0 rgba(180,0,0, 0.7);">
                                </button>
                                </a>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-3">
                        <div style="margin-top:30px;">
                            <div class="container">
                                <a href="form-complaints.php">
                                <button class="pulse-button" style="background-image: url(../public/images/complaint-img.png)!important;border-radius: 1000px!important;width:200px;height:200px;box-shadow: 0 0 0 0 rgba(255,198,0, 0.7);"></button>
                                </a>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-3">
                        <div style="margin-top:30px;">
                            <div class="container">
                                <a href="form-concerns.php">
                                <button class="pulse-button" style="background-image: url(../public/images/concern-img.png)!important;border-radius: 1000px!important;width:200px;height:200px;box-shadow: 0 0 0 0 rgba(21,0,180, 0.7);"></button>
                                </a>
                            </div>
                        </div>
                        
                    </div>
                    <div class="col-md-3">
                        <div style="margin-top:30px;">
                            <div class="container">
                                <a href="form-suggestions.php">
                                <button class="pulse-button" style="background-image: url(../public/images/suggestion-img.png)!important;border-radius: 1000px!important;width:200px;height:200px;box-shadow: 0 0 0 0 rgba(0,180,30, 0.7);"></button>
                                </a>
                            </div>
                        </div>
                        
                    </div>
                </div>
                <div class="row" style="margin-top: 12%;">
                    <!-- <h2><span>EMERGENCY CALL</span></h2> -->
                    <center><span style="font-size: 14px;font-weight: 600;"><i>(Click this button to iniate an emergency call)</i></span><br><br>
                    
                    <!-- <a href="tel:<?=$hotline['telno']?>"> -->
                    <button class="pulse-button" onclick="checkRoom()" style="background-image: none!important;box-shadow: 0 0 0 0 rgba(180,0,0, 0.7);background-color: #B40000;border-radius: 5px 5px!important; border: #FFC600 10px solid;"><i class="fa fa-phone" style="font-size: 30px;color:#fff;"></i></button>
                    <!-- </a> -->

                    </center>
                   
                </div>
            </div>
        </div>

        <div class="templatemo-footer" style="background-color: #10395C;">

            <div class="container">

                <div class="row">

                    <div class="text-center">



                        <div class="footer_container">

                           

                            <div class="height30"></div>

                            <a class="btn btn-lg btn-orange" href="#" role="button" id="btn-back-to-top">Back To Top</a>

                            <div class="height30"></div>

                        </div>

                        <div class="footer_bottom_content">

                   			<span id="footer-line" style="color:#fff;">Copyright © 2020 <a href="index.php" style="color:#fff;">E-REPORT MO!</a>

                            </span>

                        </div>

                        

                    </div>

                </div>

            </div>

        </div>

        <script crossorigin src="https://unpkg.com/@daily-co/daily-js"></script>
        <script>
            var userid = "<?=$_SESSION['cid']?>";
            function checkRoom(){
                $.ajax({
                    type: "POST",
                    url: "ajax-requests.php",
                    dataType: "JSON",
                    data: {
                        req: "check-video-chat",
                        userid: userid
                    },
                    success: function(data){
                        if(data.result==1){
                            initCall(data.room);
                        }else{
                            initCall(null);
                        }
                    }
                });
            }

            function initCall(room){
                var room = room;

                if(room==null){
                    console.log(null);
                    fetch("https://api.daily.co/v1/rooms", {
                      "method": "POST",
                      "headers": {
                        "Content-Type": "application/json",
                        "Authorization": "Bearer 6ef679ecefa79e3c74c8be3fbf0d7bb0867f5f01fd64ec000337eab0e4a986a3"
                      },
                      "body": "{\"properties\":{\"autojoin\":true,\"enable_chat\":true}}"
                    })
                    .then(response => response.json())
                    .then(result => {
                      room = result.name;

                      $.ajax({
                        type: "POST",
                        url: "ajax-requests.php",
                        dataType: "JSON",
                        data: {
                            req: "save-video-chat",
                            userid: userid,
                            room: room,
                        },
                        success: function(data){
                            if(data.result==1){
                                callFrame = window.DailyIframe.createFrame();
                                callFrame.join({ url: 'https://ereportmo.daily.co/'+room });
                            }
                        }
                      });

                      
                    })
                    .catch(err => {
                      console.error(err);
                    });
                }else{
                    console.log(room);
                    callFrame = window.DailyIframe.createFrame();
                    callFrame.join({ url: 'https://ereportmo.daily.co/'+room });
                }
            }
            
        </script>

        

        <script src="../public/js/jquery.min.js" type="text/javascript"></script>

        <script src="../public/js/bootstrap.min.js"  type="text/javascript"></script>

        <script src="../public/js/stickUp.min.js"  type="text/javascript"></script>

        <script src="../public/js/colorbox/jquery.colorbox-min.js"  type="text/javascript"></script>

        <script src="../public/js/templatemo_script.js"  type="text/javascript"></script>

        <script src="../public/js/alertify.min.js"></script>

		<!-- templatemo 395 urbanic -->

    </body>

</html>
<?php 
if(isset($_SESSION['sysmsg'])){
?>
<script type="text/javascript">
    alertify.alert("EREPORTMO:","<?=$_SESSION['sysmsg']?>");
</script>

<?php
unset($_SESSION['sysmsg']);
}
?>




