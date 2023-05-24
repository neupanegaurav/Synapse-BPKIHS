<?php
include('..includes/db.php');
if (isset($_POST['register'])){
	$name=$_POST['name'];
	$email=$_POST['email'];
	$contact=$_POST['contact'];
	$college=$_POST['college'];
	$faculty=$_POST['faculty'];
	$batch=$_POST['batch'];
	$event=$_POST['event'];

	//images of students
	$photo=$_FILES['photo']['name'];
	$vphoto=$_FILES['vphoto']['name'];

	//creating temporary images
	$temp_name1=$_FILES['photo']['tmp_name'];
	$temp_name2=$_FILES['vphoto']['tmp_name'];

	//validation of forms
	if($name=='' or $email=='' or $contact=='' or $college=='' or $faculty=='' or $batch=='' or $event==''){
			echo "<script>alert('Please fill all the fields!')</script>";
			exit();
		}


	//uploading images to server
		move_uploaded_file($temp_name1,"student_images/$photo");
		move_uploaded_file($temp_name2,"student_images/$vphoto");
		
	//inserting data
		$insert_data = "insert into register (name, email, contact, college_name,faculty, batch, event, image, voucher_image) values ('$name','$email','contact','college','faculty','batch','event','$photo','$vphoto')";
		$run_data=mysqli_query($con, $insert_data);
		if ($run_data){
			echo "<script>alert('Registered sucessfully!')</script>";
			header('location:../register.php');
		}


}
?>