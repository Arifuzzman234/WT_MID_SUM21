<html>
<head>
</head>
<fieldset>
    <h1><legend>Cargo</legend></h1>
	<h3>carry your cargo economicaly and save money</h3>

<body>
<form action="/action_page.php">
  <b><label for="Airline">Airline:</label><br>
 
  <select name="Airline" size="1">
  <option value="Delta Airline">Delta Airline</option>
  <option value="American Airline">American Airline</option>
  <option value="United Airline">United Airline</option>
  <option value="Jetblue">Jetblue</option>
  <option value="Frontier Airline">Frontier Airline</option>
  <option value="Virgin Atlantic">Virgin Atlantic</option>
  <option value="Allegiant Airline">Allegiant Airline</option>
  <option value="Alaska Airline">Alaska Airline</option>
  <option value="Hawaiian Airline">Hawaiian Airline</option>
  <option value="Aeromexico">Aeromexico</option>
  <option value="Ryanair">Ryanair</option>
  </select><br>
  
<b><label for="">Goods Type:</label><br>
 
  <select name="Goods Type" size="1">
  <option value="Vagetable">vagetable</option>
  <option value="Livestock">Livestock</option>
  <option value="Frozen food">Frozen food</option>
  </select><br>
  
  <b><label for="">Estimate Goods Load:</label><br>
 
  <select name="Estimate Goods Load" size="1">
  <option value="1-10 kg">1-10 kg</option>
  <option value="20-50kg">20-50kg</option>
  <option value="100-150 kg">100-150 kg</option>
  <option value="150-200 kg">150-200 kg</option>
  <option value="200-300 kg">200-300 kg</option>
  <option value="300-500 kg">300-500 kg</option>
  <option value="500-1000 kg">500-1000 kg</option>
  <option value="1000-2000 kg">1000-2000 kg</option>
  <option value="2000-3000 kg">2000-3000 kg</option>
  <option value="3000-5000 kg">3000-5000 kg</option>
  </select><br>
  <b><label for="">Departure From:</label></b><br>
  <select name="Departure From" size="1">
  <option value="Los Angeles">Los Angeles</option>
  <option value="Utah">Utah</option>
  <option value="chicago">Chicago</option>
  <option value="Maine">Maine</option>
  <option value="Newyork">Newyork</option>
  <option value="Texus">Texus</option>
  <option value="Oklahoma">Oklahoma</option>
  
  <select><br>
  
  <b><label for="">Flying To:</label></b><br>
  <select name="Flying TO" size="1">
  <option value="Los Angeles">Los Angeles</option>
  <option value="Utah">Utah</option>
  <option value="chicago">Chicago</option>
  <option value="Maine">Maine</option>
  <option value="Newyork">Newyork</option>
  <option value="washington">Washington</option>
  <option value="Boston">Boston</option>
  <option value="Denver">Denver</option>
  <option value="Texus">Texus</option>
  <option value="Oklahoma">Oklahoma</option>
  <select><br>
  <b><label for="">Departure Date:</label></b><br>
 <label for="start">Start date:</label>

	<input type="date" id="Departure" name="Departure Date"
       value="2021-01-01"
       min="2021-01-01" max="2030-12-31"><br>
	<b><label for="start">Return Date:</label></b>
	<input type="date" id="Return" name=" " value="2021-01-01" min="2021-01-01" max="2030-12-31"> 
  <br>
 <p><input type="button" onclick="alert('Searching')" value="Search"> <p>
 </fieldset> 
</form>
</body>
</html>

  
  
  