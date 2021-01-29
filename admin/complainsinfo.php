<?php include '../public/includes/links.php'; ?>
<?php include '../public/includes/session.php'; ?>
<body>
<style type="text/css">
	@media print {
		.table {
			width: 100%;
		}
	}
</style>
  	<div class="main-section">

    	<!-- START nav -->
    	<?php include '../public/includes/navloggedin.php'; ?>
    	<!-- END nav -->
        
	  <section class="ftco-section ftco-section-2 bg-light" id="javascriptsComponents">
			<div class="container">
				 <div class="row">
         	<div class="col-md-4">
         		<button type="button" id="btn1" class="btn btn-success" onclick="pross(<?=$_REQUEST['id']?>)">Processed</button>
         	</div>
         	<div class="col-md-4">
         	</div>
         	<div class="col-md-4">
         		<button type="button" id="btn2" onclick="view()" class="btn btn-info"  style="float:right;"><i class="fa fa-print" aria-hidden="true"></i></button>
         	</div>
         </div>
				<div class="row">
					<div class="col-md-12">
						<div class="myaccordion w-100 py-4 px-1 px-md-4">
							<div class="card">
								<div class="card-header">
									<div class="row">
										<div class="col-md-3">
											<img src="https://i.ibb.co/Hz0BYtZ/policelogo.png" style="width: 150px;">
										</div>
										<div class="col-md-6 text-center">
											<h5>Republic of the Philippines</h5>
											<h4>Laguna Police Department</h4>
											<h5>Santa Cruz, Laguna</h5>

										</div>
										<div class="col-md-3">
											<!-- <img src="../images/policelogo.png" style="width: 100px;"> -->
										</div>
									</div>

								</div>
								<form method="POST" class="text-center">
									<h2>COMPLAINTS REPORT</h2>
									<div class="card-body text-left">
										<br>
										<br>
										<br>
										<br>
										<div class="row">
											<div class="col-lg-12" style=" display: flex;flex-wrap: nowrap;">
											<div style="width: 25%!important;"><h6><b>Person Reporting:</b></h6></div>
											<div  style="width: 100%!important;"> <input type="text" readonly class="form-control"  width="50" id="name" style="padding-bottom: 25px;color: black!important;border:none!important;border-bottom: black!important;"></div>	 
											</div>
											<div class="col-lg-12" style=" display: flex;flex-wrap: nowrap;">
											<div style="width: 25%!important;"><h6><b>Crime Location:</b></h6></div>
											<div style="width: 100%!important;"> <input type="text" readonly class="form-control" width="50" id="address" style="padding-bottom: 25px; color: black!important; border:none!important;"></div>	 
											</div>
											<div class="col-lg-12" style=" display: flex;flex-wrap: nowrap;">
											<div style="width: 25%!important;"><h6><b>Crime Type:</b></h6></div>
											<div style="width: 100%!important;"> <input type="text" readonly class="form-control" width="50" id="desc" style="padding-bottom: 25px; color: black!important; border:none!important;"></div>	 
											</div>
											<div class="col-lg-12" style=" display: flex;flex-wrap: nowrap;">
											<div style="width: 25%!important;"><h6><b>Crime Description:</b></h6></div>
											<div style="width: 100%!important;">  <textarea class="form-control" id="crimeinfo" rows="3" style="color: black;border: 1px gray solid!important;"></textarea></div>	 
											</div>
											<br>
											<br>
											<div class="col-lg-12" style=" display: flex;flex-wrap: nowrap;">
											<div style="width: 25%!important;"><h6><b>Crime Evidences:</b></h6></div>
											</div>
											<div style="width: 100%!important;"> 
                                               <div class="row">
                                               	<?php
                                               	$eveid = $_REQUEST['id'];
										          $result = mysqli_query($conn, "SELECT * FROM tbl_evidences WHERE reportid = '$eveid'");
										           while($row=mysqli_fetch_assoc($result))
										              {
										             ?>
                                               	 <div class="col-md-4"> 
                                               	 	<div class="card"  style="border: 1px gray solid!important; text-align: center;">
												<div class="card-body">
												<img src="../public/evidences/<?=$row['evidence']?>" style="width: 150px;">
												
												</div>
												</div>
                                               	 </div>
                                               	 <?php
											        }
											      ?> 
                                               </div>
											</div>	
										</div>
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
		function view(){
               $("#btn1").hide();
               $("#btn2").hide();
              	window.print();
		}
		function pross(id){
			var aa = 2;
			if (confirm("Process Compaints?")) {
			       $.ajax({
			    type: "POST",
			    url: "updatestatus.php",
			    dataType: 'JSON',
			    data: { id:id, aa:aa },
			    cache: false,
			    success: function(data){
			    if (data>0) {
			    	if (confirm("Compaints Status Updated!")) {
                   window.location.href = 'table-complaints.php'; 
			    	}
			    }
   
			  }
			}); 
			}
		}
		// $(document).ready(function () {
		// 	window.print();
		// 	// setTimeout(window.close, 0);
		// });
$( document ).ready(function() {
     get_info();
         function get_info(){
         	var aa = 2;
         	var id = <?=$_REQUEST['id']?>;
         	// alert(aa)
           $.ajax({
    type: "POST",
    url: "requestcom.php",
    dataType: 'JSON',
    data: { id:id, aa:aa },
    cache: false,
    success: function(data){
    console.log(data);
    $('#name').val(data[0].name);
    $('#address').val(data[0].address);
    $('#desc').val(data[0].category);
    $('#crimeinfo').val(data[0].description);
  }
}); 
         }
         });
	</script>