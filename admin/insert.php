<!DOCTYPE html>
<?php include("connect.php"); ?>
<html>
<head>
	<title></title>
</head>
<body>
<?php
//$a=$_POST["file"];
$b=$_POST["pcode"];
$c=$_POST["pname"];
$d=$_POST["pcategory"];
$e=$_POST["pprice"];
$f=$_POST["delprice"];
$g=$_POST["pdescription"];




$target_dir = "images/";
$target_file = $target_dir.basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}
// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["fileToUpload"]["size"] > 500000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}


$sql="INSERT into products values('$b','$c','$d','$e','$f','$g','$target_file')";
$result=$conn->query($sql);

if ($conn->query($sql) === TRUE) {
    echo "alert('Insert Successfully')";
} else {
    echo "alert('Insertion Failed')". $conn->error;
}
?>
</body>
</html>