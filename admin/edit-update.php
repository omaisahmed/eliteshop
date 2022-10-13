<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
  <h2>All Products</h2>
  <form method="post" action="update.php" enctype="multipart/form-data">           
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>Pimage</th>
        <th>Pcode</th>
        <th>Pname</th>
        <th>Pcategory</th>
        <th>Pprice</th>
        <th>Delprice</th>
        <th>Pdescription</th>
        
      </tr>
    </thead>
    <tbody>
    	
    	<td><input type="file" name="file" id="fileToUpload"></td>
    	<td><input type="text" name="pcode"></td>
    	<td><input type="text" name="pname"></td>
    	<td><input type="text" name="pcategory"></td>
    	<td><input type="text" name="pprice"></td>
    	<td><input type="text" name="delprice"></td>
    	<td><input type="text" name="pdescription"></td>
    	<td><button type="submit" name="upload">Update</button></td>

    </tbody>
    </form>
</body>
</html>