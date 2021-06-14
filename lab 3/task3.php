<html>
<body>
<?php
 $length=4;
 $width=9;
 
 if($length==$width) 
  echo "shape is a square.";
 else
 {
  $Area= ($length*$width);
  echo "<h2>Area: $Area</h2>";
  $Parameter= 2*($length+$width);
  echo "<h2>Parameter: $Parameter </h2>";
 }
?>
</body>
</html>