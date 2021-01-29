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
    	<?php include '../public/includes/nav.php'; ?>
    	<!-- END nav -->

	  <section class="ftco-section ftco-section-2 bg-light" id="javascriptsComponents">
			<div class="container">
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
									<h2>CRIME REPORT</h2>
									<div class="card-body text-left">
										<div class="row">
											<div class="col-md-12">
												<table class="table table-hover table-bordered table-responsive-sm">
													<thead class="bg-danger">
														<th style="width: 15%;">Name</th>
														<th style="width: 15%;">Email</th>
														<th style="width: 15%;">Location</th>
														<th style="width: 25%;">Description</th>
														<th style="width: 15%;">Date</th>
													</thead>
										            <tbody>
											            <?php 
											                $result = mysqli_query($conn, "SELECT * FROM tbl_crimes ");
											                	foreach($result as $row) { ?>
											                  	<tr>
												                    <td class="capitalized"><?php echo $row['name'] ?></td>
												                    <td class=""><?php echo $row['email'] ?></td>
												                    <td class="capitalized"><?php echo $row['location'] ?></td>
												                    <td>
												                    	<?php if (strlen($row['description']) > 60): ?>
												                    		<span class="text-black"><?php echo substr($row['description'], 0, 60) ?></span>
												                    		<span>...</span>
												                    		<span class="text-black collapse"><?php echo substr($row['description'], 60) ?></span>
												                    		<a href="javascript:" class="readmore">read more...</a>
											                    		<?php else: ?>
												                    		<?php echo $row['description']; ?>
												                    	<?php endif ?>
												                    </td>
												                    <td class="capitalized"><?php echo $row['created_at'] ?></td>
											                  	</tr>
											            <?php } ?>
										            </tbody>
												</table>
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
		$(document).ready(function () {
			window.print();
			// setTimeout(window.close, 0);
		});
	</script>