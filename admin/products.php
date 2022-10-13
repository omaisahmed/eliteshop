<!DOCTYPE html>
<?php include("connect.php"); ?>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

  <script type="text/javascript">
  	function update(){
  		window.location.href="edit-update.php";
  	}
  	function insert(){
  		window.location.href="edit-insert.php";
  	}
  	function del(){
  		window.location.href="";
  	}
  	
  </script>
</head>
<body>

<div class="container">
  <h2>All Products</h2>           
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>ID</th>
        <th>Pimage</th>
        <th>Pcode</th>
        <th>Pname</th>
        <th>Pcategory</th>
        <th>Pprice</th>
        <th>Delprice</th>
        <th>Pdescription</th>
        
      </tr>
    </thead>
<?php
$sql1="SELECT * from products order by id ASC";
$result1=$conn->query($sql1);
while ($row1=$result1->fetch_assoc())
{
  $id=$row1["id"];
$a=$row1["pcode"];
$b=$row1["pcategory"];
$c=$row1["pname"];
$d=$row1["pprice"];
$e=$row1["pimage"];
$f=$row1["pdescription"];
$g=$row1["dprice"];
$newimg="../".$e;
?>

    <tbody>
      <tr>
        <td align="center"><?php echo "$id" ?></td>
        <td align="center"><?php echo "<img src='$newimg' class='img-responsive' width=100 height=100>";?></td>
        <td align="center"><?php echo $a ?></td>
        <td align="center"><?php echo $c ?></td>
        <td align="center"><?php echo $b ?></td>
        <td align="center"><?php echo $d ?></td>
        <td align="center"><?php echo $g ?></td>
        <td align="center"><?php echo $f ?></td>
        <td><a href="del.php?id=$id"><input type=button value="Delete"></a></td>
      </tr>
     
    
  <?php } ?>

  <td align="center" colspan="7"><input type=button value="Update" onclick="update()">
  <input type=button value="Insert" onclick="insert()"></td>
  </tbody>
  </table>
</div>

</body>
</html>
