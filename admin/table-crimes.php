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
<div class="container-fluid">
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
<h3><b>Crime Reports</b></h3>
</div>

<div class="card-body text-left">
<div class="row">
<div class="col-md-12">
	<div class="row">
		<div class="col-md-6">
			<div class="input-group mb-3">
      <div class="input-group-prepend">
       <span class="input-group-text" id="basic-addon3">Search Name</span>
      </div>
      <input type="text" class="form-control" id="name" onkeypress="searchname()" aria-describedby="basic-addon3" style="border-color: lightgray!important;">
      </div>
		</div>
		<div class="col-md-6">
			<div class="btn-group" role="group" aria-label="Basic example" style="float: right;">
			  <button type="button" class="btn btn-secondary" id="r" onclick="get_crime('R')" style="background-color: transparent;border-left: none;border-bottom: none;border-top: none; padding-right:10px;">Receive</button>
			  <button type="button" class="btn btn-secondary" id="v" onclick="get_crime('V')"  style="background-color: transparent;border-left: none;border-bottom: none;border-top: none; padding-right:10px;padding-left: 10px; color: #FFC107;">Verified</button>
			  <button type="button" class="btn btn-secondary" id="p" onclick="get_crime('P')"  style="background-color: transparent;border-left: none;border-bottom: none;border-top: none; padding-right:10px;padding-left: 10px;color: #007BFF;">Processing</button>
			  <button type="button" class="btn btn-secondary" id="a" onclick="get_crime('A')"  style="background-color: transparent;border-left: none;border-bottom: none;border-top: none;border-right: none;padding-left: 10px;color: #28A745;">Accomplished</button>
			</div>
		</div>
	</div>
	<table class="table table-hover table-bordered table-responsive-sm">
		<thead class="bg-danger">
			<th style="width: 20%;">Name</th>
			<th style="width: 15%;">Address</th>
			<th style="width: 15%;">Location</th>
		<!-- 	<th style="width: 25%;">Description</th> -->
			<th style="width: 10%;">Status</th>
			<th style="width: 20%;">Date</th>
			<th style="width: 30%;" class="noprint">Action</th>
		</thead>
        <tbody id="view1"  style="overflow:auto;">
            <?php 
                $result = mysqli_query($conn, "SELECT * FROM tbl_crimes WHERE archived = 0");
                	foreach($result as $row) { ?>
                  	<tr>
	                    <td class="capitalized"><?php echo $row['name'] ?></td>
	                    <td class=""><?php echo $row['address'] ?></td>
	                    <td class="capitalized"><?php echo $row['location'] ?></td>
	                   
	                    <td style="text-align: center;">
	                    	<?php if($row["status"] == "R"): ?>
           <span class="badge badge-secondary" style="font-size: 12px; color: white;">Receive</span>
           <?php elseif($row["status"] == "V"): ?>
        <span class="badge badge-warning" style="font-size: 12px;color: white;">Verified</span>
        <?php elseif($row["status"] == "P"): ?>
        <span class="badge badge-primary" style="font-size: 12px;color: white;">Processing</span>
        <?php elseif($row["status"] == "A"): ?>
        <span class="badge badge-success" style="font-size: 12px;color: white;">Accomplished</span>

        <?php endif; ?>
	                    	
	                    </td>
	                    <td class="capitalized"><?php echo $row['created_at'] ?></td>
	                    <td class="text-center noprint">
	                    	<div class="row">
	                    		<div class="col-md-4">
	                    			<a href="crimeinfo.php?id=<?= $row['id']?>">
	                    			<button type="button" class="btn btn-primary"><i class="fa fa-eye" aria-hidden="true"></i></button></a>
	                    		</div>
	                    		<div class="col-md-4">
	                    			<button type="button" class="btn btn-danger" onclick="archive(<?= $row['id'] ?>)"><i class="fa fa-archive" aria-hidden="true"></i></button>
	                    		</div>
	                    	</div>
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
<script type="text/javascript">

	function get_crime(status){
		if (status == 'R') {
         $('#r').css( 'font-weight', '900' );
         $('#v').css( 'font-weight', '' );
         $('#p').css( 'font-weight', '' );
         $('#a').css( 'font-weight', '' );
		}
		if (status == 'V') {
         $('#v').css( 'font-weight', '900' );
         $('#r').css( 'font-weight', '' );
         $('#p').css( 'font-weight', '' );
         $('#a').css( 'font-weight', '' );
		}
		if (status == 'P') {
		$('#p').css( 'font-weight', '900' );
         $('#v').css( 'font-weight', '' );
         $('#r').css( 'font-weight', '' );
         $('#a').css( 'font-weight', '' );
		}
		if (status == 'A') {
		$('#a').css( 'font-weight', '900' );
		$('#p').css( 'font-weight', '' );
         $('#v').css( 'font-weight', '' );
         $('#r').css( 'font-weight', '' );
		}
		  var req1 = 1;
		 $.ajax({
			    type: "POST",
			    url: "get_crime.php",
			    dataType: 'JSON',
			    data: { status:status, req1:req1 },
			    cache: false,
			    success: function(data){
			    	// console.log(data);
			    	$('#view1').empty();
			    	var content=''; 
			    	// var button1 = ;
			    	$.each(data, function(i,dta){
			    		if (dta.status == 'R') {
			    			var stat = '<span class="badge badge-secondary" style="font-size: 12px; color: white;">Receive</span>';
			    		}
			    		if (dta.status == 'V') {
			    			var stat = '<span class="badge badge-warning" style="font-size: 12px;color: white;">Verified</span>';
			    		}
			    		if (dta.status == 'P') {
			    			var stat = '<span class="badge badge-primary" style="font-size: 12px;color: white;">Processing</span>';
			    		}
			    		if (dta.status == 'A') {
			    			var stat = '<span class="badge badge-success" style="font-size: 12px;color: white;">Accomplished</span>';
			    		}
                        // console.log(dta);
                        content+='<tr>';
                        content+='<td>'+dta.name+'</td>';
                        content+='<td>'+dta.address+'</td>';
                        content+='<td>'+dta.location+'</td>';
                        content+='<td style="text-align:center;">'+stat+'</td>';
                        content+='<td>'+dta.created_at+'</td>';
                        content+='<td style="text-align: center;"><button type="button" class="btn btn-primary" onclick="sample('+dta.id+')" style="width:60px;"><i class="fa fa-eye" aria-hidden="true"></i></button><button type="button" class="btn btn-danger" onclick="sample('+dta.id+')" style="width:60px;"><i class="fa fa-archive" aria-hidden="true"></i></button></td>';
                        content+='</tr>';
			    	 });
                   $(content).appendTo("#view1"); 
			       
   
			  }
			}); 
	}
	function sample(id){
		alert(id);
	}
	function searchname(){
	  var name = 	$('#name').val();
	   var req1 = 2;
		 $.ajax({
			    type: "POST",
			    url: "get_crime.php",
			    dataType: 'JSON',
			    data: { name:name, req1:req1 },
			    cache: false,
			    success: function(data){
			    	// console.log(data);
			    	$('#view1').empty();
			    	var content=''; 
			    	// var button1 = ;
			    	$.each(data, function(i,dta){
			    		if (dta.status == 'R') {
			    			var stat = '<span class="badge badge-secondary" style="font-size: 12px; color: white;">Receive</span>';
			    		}
			    		if (dta.status == 'V') {
			    			var stat = '<span class="badge badge-warning" style="font-size: 12px;color: white;">Verified</span>';
			    		}
			    		if (dta.status == 'P') {
			    			var stat = '<span class="badge badge-primary" style="font-size: 12px;color: white;">Processing</span>';
			    		}
			    		if (dta.status == 'A') {
			    			var stat = '<span class="badge badge-success" style="font-size: 12px;color: white;">Accomplished</span>';
			    		}
                        // console.log(dta);
                        content+='<tr>';
                        content+='<td>'+dta.name+'</td>';
                        content+='<td>'+dta.address+'</td>';
                        content+='<td>'+dta.location+'</td>';
                        content+='<td style="text-align:center;">'+stat+'</td>';
                        content+='<td>'+dta.created_at+'</td>';
                        content+='<td style="text-align: center;"><button type="button" class="btn btn-primary" onclick="sample('+dta.id+')" style="width:60px;"><i class="fa fa-eye" aria-hidden="true"></i></button><button type="button" class="btn btn-danger" onclick="sample('+dta.id+')" style="width:60px;"><i class="fa fa-archive" aria-hidden="true"></i></button></td>';
                        content+='</tr>';
			    	 });
                   $(content).appendTo("#view1"); 
			       
   
			  }
			}); 
		
	}
	function archive(id){
		var aa = 0;
		if (confirm("Achive this Record?")) {
			       $.ajax({
			    type: "POST",
			    url: "astatus.php",
			    dataType: 'JSON',
			    data: { id:id, aa:aa },
			    cache: false,
			    success: function(data){
			    if (data>0) {
			    	if (confirm("Successfull!")) {
                   window.location.href = 'table-crimes.php'; 
			    	}
			    }
   
			  }
			}); 
			}
	}
</script>