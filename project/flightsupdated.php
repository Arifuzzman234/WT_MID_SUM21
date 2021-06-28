<?php
$airport=""; 
$err_airport="";
$airline=""; 
$err_airline="";
$class=""; 
$err_class="";
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
	if(empty($_POST["airline"])){
      $err_airline="Airline Required";
      $hasError = true;
    }
    else{
      $airline=$_POST["airline"];
    }
	if(empty($_POST["class"])){
      $err_class="Class Required";
      $hasError = true;
    }
    else{
      $class=$_POST["class"];
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
    <legend>Flights</legend>
  <h3>Flywith us in cheap price</h3>
<body>
  <h2>Search For Flights</h2>
  <form action="" method="post">
  <table>
  <tr>
    <td>Airport: </td>
    <td><input type="text" name="airport" value="<?php echo $airport;?>" placeholder="airport"></td>
    <td><span><?php echo $err_airport;?></span></td>
  </tr>
  <tr>
    <td>Airline: </td>
    <td><input type="text" name="airline" value="<?php echo $airline;?>" placeholder="airline"></td>
    <td><span><?php echo $err_airline;?></span></td>
  </tr>
  
  <tr>
    <td>Class: </td>
    <td><input type="text" name="class" value="<?php echo $class;?>" placeholder="class"></td>
    <td><span><?php echo $err_class;?></span></td>
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
  <tr>
  <td>Seat needed</td>
  <td>
  <select name "Seat needed">
  <option disabled>--select--</option>
  <option>1</option>
  <option>2</option>
  <option>3</option>
  <option>4</option>
  <option>5</option>
  <option>6</option>
  <option>7</option>
  <option>8</option>
  <option>9</option>
  </select>
  </td>
  </tr>
  
    <td align="left" colspan="2"><input type="submit" value="Search"></td>
  </tr>
  </table>
  </form>
</body>
</fieldset>
</html>