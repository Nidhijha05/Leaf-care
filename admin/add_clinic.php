<?php
include 'function.php';
session_start();
if(!isset($_SESSION['a_email']))
{
  header('Location:index.php');
}

if (isset($_POST['add_clinic'])) {

$clinic_name=$_POST['clinic_name'];
$clinic_number=$_POST['clinic_number'];
$location=$_POST['location'];
$clinic_lat=$_POST['clinic_lat'];
$clinic_long=$_POST['clinic_long'];
$start_time=$_POST['start_time'];
$end_time=$_POST['end_time'];
$clinc_city=$_POST['clinc_city'];
$clinic_status=$_POST['clinic_status'];

add_clinic($clinic_name,$clinic_number,$location,$clinic_lat,$clinic_long,$start_time,$end_time,$clinc_city,$clinic_status);

}

?>
<!DOCTYPE HTML>
<html>
<head>
<title>Dr Consult | Add Clinic</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<!--<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />--> 
<!-- Custom Theme files -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link href="css/font-awesome.css" rel="stylesheet"> 
<script src="js/jquery.min.js"> </script>
<script src="js/bootstrap.min.js"> </script>
  
<!-- Mainly scripts -->
<script src="js/jquery.metisMenu.js"></script>
<script src="js/jquery.slimscroll.min.js"></script>
<!-- Custom and plugin javascript -->
<link href="css/custom.css" rel="stylesheet">
<script src="js/custom.js"></script>
<script src="js/screenfull.js"></script>
		<script>
		$(function () {
			$('#supported').text('Supported/allowed: ' + !!screenfull.enabled);

			if (!screenfull.enabled) {
				return false;
			}

			

			$('#toggle').click(function () {
				screenfull.toggle($('#container')[0]);
			});
			

			
		});
		</script>

<!----->

</head>
<body>
<div id="wrapper">
        <!----->
        <?php include 'header_sidebar.php';?>
		 <div id="page-wrapper" class="gray-bg dashbard-1">
       <div class="content-main">
 
 	<!--banner-->	
		   <div class="banner">
		    	<h2>
				<a href="dashboard.php">Home</a>
				<i class="fa fa-angle-right"></i>
				<span>Add Clinic</span>
				</h2>
		    </div>
		<!--//banner-->
 	<!--grid-->
 	<div class="validation-system">
    <h5 style="text-align: center;color: red;">
 		<?php
    if(isset($_GET['msg']))
    {
      echo $_GET['msg'];
    }
    ?>
  </h5>
 		<div class="validation-form">
 	<!---->
  	    
        <form action="#" method="post">
         	<div class="vali-form">
            <div class="col-md-6 form-group1">
              <label class="control-label">Clinic Name</label>
              <input type="text" name="clinic_name" placeholder="Enter Clinic Name" required="">
            </div>
            <div class="col-md-6 form-group1 form-last">
              <label class="control-label">Clinic Phone</label>
              <input type="number" name="clinic_number" placeholder="Enter Clinic Phone Number" required="">
            </div>
            <div class="clearfix"> </div>
            </div>
            
            <div class="col-md-12 form-group1 group-mail">
              <label class="control-label">Address</label>
              <textarea name="location" placeholder="Enter Clinic Address"></textarea>
            </div>
             
             <div class="clearfix"> </div>

             <div class="vali-form">
            <div class="col-md-6 form-group1">
              <label class="control-label">Clinic Latitude </label>
              <input type="text" name="clinic_lat" placeholder="Enter Clinic Latitude" required="">
            </div>
            <div class="col-md-6 form-group1 form-last">
              <label class="control-label">Clinic Longitude</label>
              <input type="text" name="clinic_long" placeholder="Enter Clinic Longitude" required="">
            </div>
            <div class="clearfix"> </div>
            </div>
            <div class="vali-form">
            <div class="col-md-6 form-group1">
              <label class="control-label">Starting  Hours:- </label>
              <input type="time" name="start_time" required="">
            </div>
            <div class="col-md-6 form-group1 form-last">
              <label class="control-label">Ending Hours:- </label>
              <input type="time" name="end_time" required="">
            </div>
            <div class="clearfix"> </div>
            </div>
             <div class="vali-form vali-form1">
            <div class="col-md-6 form-group1">
              <label class="control-label">Clinic City</label>
              <input type="text" name="clinc_city" placeholder="Enter Clinic City" required="">
            </div>
            <div class="col-md-6 form-group2 group-mail">
              <label class="control-label">Clinic Status</label>
                <select name="clinic_status">
              <option value="1">Show</option>
              <option value="0">Hide</option>
              
            </select>
            </div>
            <div class="clearfix"> </div>
            </div>
             
           
          
          
            <div class="col-md-12 form-group">
              <input type="submit" class="btn btn-primary" value="Add Clinic" name="add_clinic">
            </div>
          <div class="clearfix"> </div>
        </form>
    
 	<!---->
 </div>

</div>
 	<!--//grid-->
		<!---->
<?php include 'footer.php';?>
		</div>
		</div>
		<div class="clearfix"> </div>
       </div>
     
<!---->
<!--scrolling js-->
	<script src="js/jquery.nicescroll.js"></script>
	<script src="js/scripts.js"></script>
	<!--//scrolling js-->
</body>
</html>

