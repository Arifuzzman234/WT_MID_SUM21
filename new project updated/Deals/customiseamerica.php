<?php
  $stayingfor="";
  $err_stayingfor="";
  $transport="";
  $err_transport="";
  $et="";
  $err_et="";
  $nop="";
  $err_nop="";
  $htp="";
  $err_htp="";
  $pwv="";
  $err_pwv="";
  $day="";
  $err_day="";
  $month="";
  $err_month="";
  $year="";
  $err_year="";
  
  $hasError=false;
  
  $noofpeoples = array("1","2","3","4","5","6","7");
  $hoteltype = array("7 star","5 star","3 star");
  $placesvisit = array("1","2","3","4","5");
  
  
 

  if($_SERVER["REQUEST_METHOD"] == "POST"){
    
    if(empty($_POST["stayingfor"])){
      $err_stayingfor="Staying For Required";
      $hasError = true;
    }
    
    else{
      $stayingfor=$_POST["stayingfor"];
    }
    
    if(!isset($_POST["transport"])){
      $err_transport="Transport Type Required";
      $hasError = true;
    }
    else{
      $transport = $_POST["transport"];
    }
	  if(!isset($_POST["et"])){
      $err_et="Entertainment Required";
      $hasError = true;
    }
    else{
      $et = $_POST["et"];
    }
    if(!isset($_POST["noofpeople"])){
      $err_nop = "NO OF People Required";
      $hasError = true;
    }
    else{
      $nop = $_POST["noofpeople"];
    }
	 if(!isset($_POST["hoteltype"])){
      $err_htp = "Hotel Type Required";
      $hasError = true;
    }
    else{
      $htp = $_POST["placesvisit"];
    }
	 if(!isset($_POST["placesvisit"])){
      $err_pwv = "Places Wants to Visit Required";
      $hasError = true;
    }
    else{
      $pwv = $_POST["placesvisit"];
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
      echo $_POST["stayingfor"]."<br>";
	  echo $_POST["transport"]."<br>";
	  echo $_POST["et"]."<br>";
      echo $_POST["noofpeople"]."<br>";
	  echo $_POST["hoteltype"]."<br>";
	  echo $_POST["placesvisit"]."<br>";
	  echo $_POST["day"]."<br>";
      echo $_POST["month"]."<br>";
      echo $_POST["year"]."<br>";
	  
     
      
    }  
  }
?>
<html>
  <head></head>
  <title>c deals america</title>
  <body style="background-color:PapayaWhip;">
  <h1>MakeMyTrip</h1>
    <fieldset>
      <form action="" method="post">
        <table >
		<h3>Please Give Information</h3>
          <tr>
            <td>Staying For Days: </td>
            <td><input type="text" name="stayingfor" value="<?php echo $stayingfor;?>" placeholder="Staying For"></td>
            <td><span><?php echo $err_stayingfor;?></span></td>
            
          </tr>
          


<tr>
            <td>Transport Type: </td>
            <td><input type="radio" value="Bus" <?php if($transport == "Bus") echo "checked";?> name="transport"> Bus <input <?php if($transport == "car") echo "checked";?> name="transport"  value="car" type="radio">car </td>
            <td><span><?php echo $err_transport;?></span></td>
          </tr>
		  <tr>
            <td>Entertainment : </td>
            <td><input type="radio" value="Movie" <?php if($et == "Movie") echo "checked";?> name="et"> Movie <input <?php if($et == "Ecopark") echo "checked";?> name="et"  value="Ecopark" type="radio">Ecopark<input <?php if($et == "Safarypark") echo "checked";?> name="et"  value="Safarypark" type="radio">safarypark </td>
            <td><span><?php echo $err_et;?></span></td>
          </tr>
          <tr>
            <td>No Of People:  </td>
            <td>
              <select name="noofpeople">
                <option selected disabled>--Select--</option>
                <?php
                  foreach($noofpeoples as $np){
                    if($nop == $np)
                      echo "<option selected>$np</option>";
                    else
                      echo "<option>$np</option>";
                  }
                ?>
              </select> 
            </td>
            <td><span><?php echo $err_nop;?></span></td>
          </tr>
		  <tr>
            <td>Hotel Type:  </td>
            <td>
              <select name="hoteltype">
                <option selected disabled>--Select--</option>
                <?php
                  foreach($hoteltype as $ht){
                    if($htp == $ht)
                      echo "<option selected>$ht</option>";
                    else
                      echo "<option>$ht</option>";
                  }
                ?>
              </select> 
            </td>
            <td><span><?php echo $err_htp;?></span></td>
          </tr>
		  <tr>
            <td>Places Wants To Visit:  </td>
            <td>
              <select name="placesvisit">
                <option selected disabled>--Select--</option>
                <?php
                  foreach($placesvisit as $pv){
                    if($pwv == $pv)
                      echo "<option selected>$pv</option>";
                    else
                      echo "<option>$pv</option>";
                  }
                ?>
              </select> 
            </td>
            <td><span><?php echo $err_pwv;?></span></td>
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