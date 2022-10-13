<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
session_start();
if(!(isset($_SESSION['signin']) && $_SESSION['signin'] != '')){
                header ("location:mycart.php?click=signin");
            }

?>

</body>
</html>