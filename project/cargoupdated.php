<?php
$airport=""; 
$err_airport="";
$goodstype=""; 
$err_goodstype="";
$goodsweight=""; 
$err_goodsweight="";
$departurefrom=""; 
$err_departurefrom="";
$flyingto=""; 
$err_flyingto="";



$hasError=false;


if($_SERVER["REQUEST_METHOD"] == "POST"){

if(empty($_POST["airport"])){
      $err_airport="Airport Required";
      $hasError = true;
    }
    else{
      $airport=$_POST["airport"];
    }
	if(empty($_POST["goodstype"])){
      $err_goodstype="Goodstype Required";
      $hasError = true;
    }
    else{
      $goodstype=$_POST["goodstype"];
    }
	if(empty($_POST["goodsweight"])){
      $err_goodsweight="Goodsweight Required";
      $hasError = true;
    }
    else{
      $goodsweight=$_POST["goodsweight"];
    }
	if(empty($_POST["departurefrom"])){
      $err_departurefrom="Departure Required";
      $hasError = true;
    }
    else{
      $departurefrom=$_POST["departurefrom"];
    }
	if(empty($_POST["flyingto"])){
      $err_flyingto="Flyingto Required";
      $hasError = true;
    }
    else{
      $flyingto=$_POST["flyingto"];
    }
    if(!$hasError){
      echo "Showing Results For cargo";
    }
}
?>
<html>
<head></head>
<fieldset>
    <legend>Cargo</legend>
  <h3>transport your cargo in cheap price</h3>
<body>
  <h2>Search For cargo</h2>
  <form action="" method="post">
  <table>
  <tr>
    <td>Airport: </td>
    <td><input type="text" name="airport" value="<?php echo $airport;?>" placeholder="airport"></td>
    <td><span><?php echo $err_airport;?></span></td>
  </tr>
  <tr>
    <td>Goodstype: </td>
    <td><input type="text" name="goodstype" value="<?php echo $goodstype;?>" placeholder="goodstype"></td>
    <td><span><?php echo $err_goodstype;?></span></td>
  </tr>
  
  <tr>
    <td>Goodsweight: </td>
    <td><input type="text" name="goodsweight" value="<?php echo $airport;?>" placeholder="goodsweight"></td>
    <td><span><?php echo $err_goodsweight;?></span></td>
  </tr>
  <tr>
    <td>Departure: </td>
    <td><input type="text" name="departurefrom" value="<?php echo $departurefrom;?>" placeholder="departurefrom"></td>
    <td><span><?php echo $err_departurefrom;?></span></td>
  </tr>
  <tr>
    <td>FlyingTO: </td>
    <td><input type="text" name="flyingto" value="<?php echo $flyingto;?>" placeholder="flyingto"></td>
    <td><span><?php echo $err_flyingto;?></span></td>
  </tr>
  
    <td align="left" colspan="2"><input type="submit" value="Search"></td>
  </tr>
  </table>
  </form>
</body>
</fieldset>
</html>