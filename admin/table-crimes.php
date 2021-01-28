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

<section class="ftco-section ftco-section-2 bg-light" id="javascriptsComponents">
<div class="container">
<div class="row">
<div class="col-md-12">
<div class="myaccordion w-100 py-4 px-1 px-md-4">
<div class="card">
<form method="POST">
<div class="card-header" id="headingOne">
<div class="text-right">
<button class="btn btn-sm btn-info noprint" style="width: 150px;">
	<a href="dashboard.php" class=" text-white"><i class="fa fa-home"></i> Dashboard</a>
</button>
</div>
<!-- <?php echo $_SESSION['id']; ?> -->
<h5>Crime Reports</h5>
</div>

<div class="card-body text-left">
<div class="row">
<div class="col-md-12">
	<table class="table table-hover table-bordered table-responsive-sm">
		<thead class="bg-danger">
			<th style="width: 15%;">Name</th>
			<th style="width: 15%;">Email</th>
			<th style="width: 15%;">Location</th>
			<th style="width: 25%;">Description</th>
			<th style="width: 25%;">Status</th>
			<th style="width: 15%;">Date</th>
			<th style="width: 15%;" class="noprint">Action</th>
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
	                    <td>
	                    	<?php echo $row['crime_status']; ?>
	                    </td>
	                    <td class="capitalized"><?php echo $row['created_at'] ?></td>
	                    <td class="text-center noprint">

                			<!-- <?php if ($row['status'] == 0): ?>
        						<a href="sendEmail/crimeMail.php?id=<?php echo $row['id']; ?>" class=" btn-sm btn-success text-white btn-round" id="<?php echo $row['id'] ?>">
		                    		<i class="fa fa-reply"></i>
		                    	</a>
	                    	<?php endif ?> -->
	                    	<?php if ($row['crime_status'] == 'Ongoing'): ?>
        						<a href="sendEmail/crimeCompleteMail.php?id=<?php echo $row['id']; ?>" class=" btn-sm btn-info text-white btn-round" id="<?php echo $row['id'] ?>">
		                    		<i class="fa fa-check"></i>
		                    	</a>
	                    	<?php endif ?>
    						<a href="../public/includes/query/delete_crime.php?delete=<?php echo $row['id'] ?>" class=" btn-sm btn-danger text-white btn-round">
	                    		<i class="fa fa-trash"></i>
	                    	</a>
	                    </td>
                  	</tr>
            <?php } ?>
        </tbody>
	</table>
</div>
</div>
</div>
<div class="card-footer" style="background-color: white;">
<div>
<h6>Laguna Police Department</h6>
</div>
<div class="text-right noprint">
<a href="export/crimes.php" target="blank" class="btn btn-success text-white" style="width: 150px;"><i class="fa fa-file-excel-o"></i> Export</a>

<a href="table-crimes-print.php" target="blank" class="btn btn-info text-white" style="width: 150px;"><i class="fa fa-file-word-o"></i> Print</a>

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
$('.table').DataTable({
"pagingType": "full_numbers",
"width": "100%",
"lengthMenu": [[10, 25, 50, -1],[10, 25, 50, "All"]],
language: {
search: "_INPUT_",
searchPlaceholder: "Search..."
},
}); 
// window.print();
});
</script>