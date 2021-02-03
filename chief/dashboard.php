<?php include '../public/includes/links.php'; ?>

<?php include '../public/includes/session.php'; ?>



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

    	<?php include 'navloggedin.php'; ?>

    	<!-- END nav -->



	  <section class="ftco-section ftco-section-2 bg-light" id="javascriptsComponents" style="background-color: #10395C!important;">

			<div class="container-fluid">

				<div class="row">

					<div class="col-md-12">

						<div class="myaccordion w-100 py-4 px-1 px-md-4">

							<div class="card">

								<form method="POST">

									<div class="card-header" id="headingOne">

										<h5>CHIEF SECTION</h5>

									</div>



									<div class="card-footer" style="background-color: white;">

										<h6>Sta Cruz Laguna Police Department</h6>

									</div>

								</form>

							</div>

						</div>

					</div>

				</div>

			</div>

	  </section>



	  	<!-- - - - - -end- - - - -  -->



	<!-- <?php include '../public/includes/footer.php'; ?> -->

	</div>

	<?php include '../public/includes/loader.php'; ?>

</body>

<?php include '../public/includes/cores.php'; ?>



<script type="text/javascript">

  var pusher = new Pusher('de6e3e8267c7962d2434', {

    cluster: 'ap3'

  });



  var channels = ['crime-channel', 'complaint-channel', 'concern-channel', 'suggestion-channel'];



  channels.forEach(function(data){

    var new_channel = pusher.subscribe(data);



    new_channel.bind('dashboard-count', function(data) {

        var count=0;

        if(data.type=='1'){

          count = parseInt($("#crime-count").html());

          count++;

          $("#crime-count").html(count);

        }else if(data.type=='2'){

          count = parseInt($("#complaint-count").html());

          count++;

          $("#complaint-count").html(count);

        }else if(data.type=='3'){

          count = parseInt($("#concern-count").html());

          count++;

          $("#concern-count").html(count);

        }else if(data.type=='4'){

          count = parseInt($("#suggestion-count").html());

          count++;

          $("#suggestion-count").html(count);

        }

        alertify.success(data.msg,2500);

        //console.log(count);

    });



    // new_channel.bind('report-filed', function(data) {

    //     alertify.success(data);

    // });

  });



  



  

</script>