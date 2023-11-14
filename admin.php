<?php
session_start();
	require "php/config.php";
	require_once "php/functions.php";
	$user = new login_registration_class();
	$admin_id = $_SESSION['admin_id'];
	$admin_name = $_SESSION['admin_name'];
	if(!$user->get_admin_session()){
		header('Location: index.php');
		exit();
	}
?>	
<?php 
$pageTitle = "Admin";
include "php/headertop_admin.php";
?>
<div  class="admin_profile">
	
	<div class="section">
			<h3>Student</h3>
			<ul>
				<li><a href="admin_all_student.php">View All Student</a></li>
				<li><a href="st_result.php">Student Result</a></li>
				
				
			</ul>
	
	
</div>

<?php include "php/footerbottom.php";?>