<?php

include("connect.php");
if(isset($_POST['submit']))
{
	$img_name = $_FILES['doc1']['name'];
	//IF  image having the white spaces but this is not right way so be need to remove this from another special character like ,"_"(underscore) so let do 
	$img_name = preg_replace("/\s+/", "_", $img_name);//if image name haing space and all be replace from (underscore)
	$img_tmpname = $_FILES['doc1']['tmp_name'];
	$img_size  = $_FILES['doc1']['size'];
	$img_type = $_FILES['doc1']['type'];
	$allowed_ext = array("jpg","jpeg","png");
	$img_ext = pathinfo($img_name,PATHINFO_EXTENSION);
	$img_name = pathinfo($img_name,PATHINFO_FILENAME);//this fuction has remove the file extension his gives the only name of the file as you can see practically 
	
	//i am doutfull for this statement it will work or not let see i am trying to alert php code on javascript lets go
	//hey its working. now let see extension of file 
	//now see what happend
	//and also you can see if image name having spaces this is replace from _(underscore) you can see..
	// now be make this image unique and secure so what can i do
	// iam adding date and time let see
	//know you can see what happend

	$img_fname = $img_name."_".date("mjYHis").".".$img_ext;
	echo $img_fname;
	//know start the submiting this data into the database be using mysql database 
	if(!empty($img_fname))
	{
		if(in_array($img_ext, $allowed_ext))
		{
			move_uploaded_file($img_tmpname, "images/$img_fname");
		}
		else
		{
			?>
				<script >
					alert("Only jpg,jpeg,png and all image type file accepted");
				</script>

			<?php
		}
	}
	$qry = "INSERT into `tbl_image_save`(`img_name`) VALUES('$$img_fname') ";
	if(!$run = mysqli_query($con,$qry))
	{
		var_dump($con->error);
	}
	else
	{
		?>
		<script >
			alert("inserted...........");
		</script>

		<?php
	}





}

//know let see what is happening 


?>
