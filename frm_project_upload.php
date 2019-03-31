<!DOCTYPE html>
<html>
<head>
	<title>Project Upload</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">


</head>
<body>
<form action="process.php" method="post" enctype="multipart/form-data">
	<div class="container">
		<h1>Upload Image</h1>
		<div class="form-group">
			<label>Project Synopsis</label>
			<input type="file" name="doc1" accept="image/*" class="form-control">
		</div>
		<div class="form-group">
			<input type="submit" name="submit" class="btn btn-info">
		</div>		
	</div>
</form>
</body>
</html>
