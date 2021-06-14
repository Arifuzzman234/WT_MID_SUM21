<html>
<body>
<?php
 $Marks = 56;
 if($Marks >= 90)
 {
  echo "A+";
 }
 elseif($Marks >= 80 && $Marks <= 90)
 {
  echo "A";
 }
 elseif($Marks >= 70 && $Marks <= 80)
 {
  echo "B";
 }
 elseif($Marks >= 60 && $Marks <= 70)
 {
  echo "C";
 }
 else
 {
  echo "The gread is: F";
 }
?>
</body>
</html>