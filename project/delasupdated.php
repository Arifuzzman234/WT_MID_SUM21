<?php
$from=""; 
$err_from="";
$to=""; 
$err_to="";
$hasError=false;
if($_SERVER["REQUEST_METHOD"] == "POST"){
  
   if(empty($_POST["from"])){
      $err_from="From Required";
      $hasError = true;
    }
    else{
      $from=$_POST["from"];
    }
	if(empty($_POST["airline"])){
      $err_to="TO Required";
      $hasError = true;
    }
    else{
      $to=$_POST["to"];
    }
	if(!$hasError){
      echo "Showing Results For Deals";
    }

}
?>
<html>
<head></head>
<fieldset>
    <legend>Deals</legend>
  <h3>Best deals in cheap price</h3>
<body>
  <h2>Search For Deals</h2>
  <form action="" method="post">
  <table>
  <tr>
    <td>From: </td>
    <td><input type="text" name="from" value="<?php echo $from;?>" placeholder="from"></td>
    <td><span><?php echo $err_from;?></span></td>
  </tr>
  <tr>
    <td>To: </td>
    <td><input type="text" name="to" value="<?php echo $to;?>" placeholder="to"></td>
    <td><span><?php echo $err_to;?></span></td>
  </tr>
  <tr>
  <td>Sort</td>
  <td>
  <select name "sort">
  <option disabled>--select--</option>
  <option>best deal</option>
  <option>most popular</option>
  <option>lowest priced deals</option>
  
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
