
<?php
  $departureplace="";
  $err_departureplace="";
  $arrivalplace="";
  $err_arrivalplace="";
  $seatn="";
  $err_seatn="";
  $tript="";
  $err_tript="";
  $fclass="";
  $err_fclass="";
  $sc="";
  $err_sc="";
  $day="";
  $err_day="";
  $month="";
  $err_month="";
  $year="";
  $err_year="";
  
  $hasError=false;
  
  $class = array("First class","","Business class","Economy class");
  
 

  if($_SERVER["REQUEST_METHOD"] == "POST"){
    
    if(empty($_POST["departureplace"])){
      $err_departureplace="Departure Place Required";
      $hasError = true;
    }
    else if(strlen($_POST["departureplace"]) <=2){
      $err_departureplace="Departure Place Must be greater than 2";
      $hasError = true;
    }
    else{
      $departureplace=$_POST["departureplace"];
    }
    if(empty($_POST["arrivalplace"])){
      $err_arrivalplace="Arrival Required";
      $hasError = true;
    }
    
    else{
      $arrivalplace=$_POST["arrivalplace"];
    }
	if(empty($_POST["seatn"])){
      $err_seatn="Seat Needed Required";
      $hasError = true;
    }
    
    else{
      $seatn=$_POST["seatn"];
    }
    if(!isset($_POST["tript"])){
      $err_tript="Trip Type Required";
      $hasError = true;
    }
    else{
      $tript = $_POST["tript"];
    }
    if(!isset($_POST["class"])){
      $err_fclass = "Class Required";
      $hasError = true;
    }
    else{
      $fclass = $_POST["class"];
    }
    
    if(empty($_POST["sc"])){
      $err_sc="Special Requirement Required";
      $hasError = true;
    }
    else{
      $sc = $_POST["sc"];
    }
	if (!isset($_POST["day"])){
				$err_day="Day must be selected";
		}
		else{
			$day=$_POST["day"];
		}
		if (!isset($_POST["month"])){
			$err_month="Month must be selected";
		}
		else{
			$month=$_POST["month"];
		}
		if (!isset($_POST["year"])){
			$err_year="Year must be selected";
		}
		else{
			$year=$_POST["year"];
		}
    
    if(!$hasError){
      echo $_POST["departureplace"]."<br>";
      echo $_POST["arrivalplace"]."<br>";
      echo $_POST["seatn"]."<br>";
      echo $_POST["tript"]."<br>";
      echo $_POST["class"]."<br>";
      echo $_POST["sc"]."<br>";
	  echo $_POST["day"]."<br>";
      echo $_POST["month"]."<br>";
      echo $_POST["year"]."<br>";
	  
     
      
    }  
  }
?>
<html>
  <head></head>
  <title>qater</title>
  <body style="background-color:PapayaWhip;">
  <h1>MakeMyTrip</h1>
    <fieldset>
      <form action="" method="post">
        <table >
		<h3>Please Give Information</h3>
          <tr>
            <td>Departure Place: </td>
            <td><input type="text" name="departureplace" value="<?php echo $departureplace;?>" placeholder="Departure Place"></td>
            <td><span><?php echo $err_departureplace;?></span></td>
            
          </tr>
          <tr>
            <td>Arrival Place: </td>
            <td><input type="text" name="arrivalplace" value="<?php echo $arrivalplace;?>" placeholder="Arrival Place"></td>
            <td><span><?php echo $err_arrivalplace;?></span></td>
          </tr>
          <tr>
            <td>Seat Needed: </td>
            <td><input type="text" name="seatn" value="<?php echo $seatn;?>" placeholder="Seat Needed"></td>
            <td><span><?php echo $err_seatn;?></span></td>
          </tr>


<tr>
            <td>Trip Type: </td>
            <td><input type="radio" value="Oneway Trip" <?php if($tript == "Oneway Trip") echo "checked";?> name="tript"> Oneway Trip <input <?php if($tript == "Round Trip") echo "checked";?> name="tript"  value="Round Trip" type="radio">Round Trip </td>
            <td><span><?php echo $err_tript;?></span></td>
          </tr>
          <tr>
            <td>Class:  </td>
            <td>
              <select name="class">
                <option selected disabled>--Select--</option>
                <?php
                  foreach($class as $cs){
                    if($fclass == $cs)
                      echo "<option selected>$cs</option>";
                    else
                      echo "<option>$cs</option>";
                  }
                ?>
              </select> 
            </td>
            <td><span><?php echo $err_fclass;?></span></td>
          </tr>
          
          <tr>
            <td>Special Requirement:  </td>
            <td>
              <textarea name="sc"><?php echo $sc;?></textarea>
            </td>
            <td><span><?php echo $err_sc;?></span></td>
          </tr>
		  <td align="Left">Departure Date:</td>
					<td>
						<select name="day">
							<option selected disabled>day</option>
									<?php
										for($i=1;$i<=31;$i++)
										{
											echo "<option>$i</option>";
										}
									?>
						</select>
						<select name="month">
							<option selected disabled>month</option>
									<?php
										$mon= array("January","February","March","April","May","June","July","August","September","October","November","December");
										for($j=0;$j<count($mon);$j++)
										{
											echo "<option>$mon[$j]</option>";
										}
									?>
						</select>
						<select name="year">
							<option selected disabled>year</option>
									<?php
										for($k=1948;$k<=2020;$k++)
										{
											echo "<option>$k</option>";
										}
									?>
						</select>
					</td>
					<td><?php echo "$err_day"."  "."$err_month"."  "."$err_year"?></td>
				</tr>
          <tr>
            <td align="right" colspan="2"><input type="submit" value="Register"></td>
          </tr>
          
        </table>
      </form>
    </fieldset>
  </body>
</html>