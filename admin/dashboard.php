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
    	<?php include '../public/includes/navloggedin.php'; ?>
    	<!-- END nav -->

	  <section class="ftco-section ftco-section-2 bg-light" id="javascriptsComponents" style="background-color: #10395C!important;">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-12">
						<div class="myaccordion w-100 py-4 px-1 px-md-4">
							<div class="card">
								<form method="POST">
									<div class="card-header" id="headingOne">
										<h5>Dashboard</h5>
									</div>

									 <div class="row mb-3">
          <div class="col-xl-3 col-lg-6">
            <div class="card card-inverse card-danger">
              <div class="card-block bg-danger" style="padding: 8px; border-radius: 3px;">
                <div class="rotate">
                  <i class="fa fa-gavel fa-5x"></i>
                </div>
                <h6 class="text-uppercase">Crime Reports</h6>
                <h1 id="crime-count" class="display-1"><?php
                  $result = mysqli_query($conn, "SELECT * FROM tbl_crimes WHERE archived='0' AND status<>'A'");
                  $crime_count = mysqli_num_rows($result);
                  echo $crime_count;
                ?></h1>
               <a href="../admin/table-crimes.php" style="float: right; color: black;" title="View"><i class="fa fa-eye" aria-hidden="true"></i></a>
              </div>
            </div>
          </div>
          <div class="col-xl-3 col-lg-6">
            <div class="card card-inverse card-warning">
              <div class="card-block bg-warning" style="padding: 8px; border-radius: 3px;">
                <div class="rotate">
                  <i class="fa fa-exclamation fa-4x"></i>
                </div>
                <h6 class="text-uppercase">Complaints</h6>
                <h1 id="complaint-count" class="display-1"><?php
                  $result = mysqli_query($conn, "SELECT * FROM tbl_complains WHERE archived='0' AND status<>'A'");
                  $complaint_count = mysqli_num_rows($result);
                  echo $complaint_count;
                ?></h1>
                <a href="../admin/table-complaints.php" style="float: right; color: black;" title="View"><i class="fa fa-eye" aria-hidden="true"></i></a>
              </div>
            </div>
          </div>
          <div class="col-xl-3 col-lg-6">
            <div class="card card-inverse card-info">
              <div class="card-block bg-info" style="padding: 8px; border-radius: 3px;">
                <div class="rotate">
                  <i class="fa fa-question fa-5x"></i>
                </div>
                <h6 class="text-uppercase">Concern Reports</h6>
                <h1 id="concern-count" class="display-1"><?php
                  $result = mysqli_query($conn, "SELECT * FROM tbl_concerns WHERE archived='0' AND status<>'A'");
                  $concern_count = mysqli_num_rows($result);
                  echo $concern_count;
                ?></h1>
                <a href="../admin/table-concerns.php" style="float: right; color: black;" title="View"><i class="fa fa-eye" aria-hidden="true"></i></a>
              </div>
            </div>
          </div>
          <div class="col-xl-3 col-lg-6">
            <div class="card card-inverse card-success">
              <div class="card-block bg-success" style="padding: 8px; border-radius: 3px;">
                <div class="rotate">
                  <i class="fa fa-comments fa-5x"></i>
                </div>
                <h6 class="text-uppercase">Suggestions</h6>
                <h1 id="suggestion-count" class="display-1"><?php
                  $result = mysqli_query($conn, "SELECT * FROM tbl_suggestions WHERE archived='0' AND status<>'A'");
                  $suggestion_count = mysqli_num_rows($result);
                  echo $suggestion_count;
                ?></h1>
                <a href="../admin/table-suggestions.php" style="float: right; color: black;" title="View"><i class="fa fa-eye" aria-hidden="true"></i></a>
              </div>
            </div>
          </div>
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