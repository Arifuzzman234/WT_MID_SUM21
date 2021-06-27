<html>
<head>
</head>
<fieldset>
    <h1><legend>Flights</legend></h1>
	<h3>Book cheap flights and save money</h3>

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

  <b><label for="Airport">Airport:</label><br>
  <select name="Airports" size="1">
  <option value="	Hartsfield-Jackson International Airport">	Hartsfield-Jackson International Airport</option>
  <option value="Dallas/Fort Worth International Airport">Dallas/Fort Worth International Airport</option>
  <option value="Denver International Airport">Denver International Airport</option>
  <option value="O'Hare International Airport">	O'Hare International Airport</option>
  <option value="Los Angeles International Airport">	Los Angeles International Airport</option>
  <option value="Charlotte Douglas International Airport">	Charlotte Douglas International Airport</option>
  <option value="Allegiant Airline">Allegiant Airline</option>
  <option value="McCarran International Airport">McCarran International Airport</option>
  <option value="Phoenix Sky Harbor International Airport">	Phoenix Sky Harbor International Airport</option>
  <option value="Miami International Airport">Miami International Airport</option>
  <option value="San Francisco International Airport">San Francisco International Airport</option>
  </select><br>
  
  <b><label for="">Departure From:</label></b><br>
  <select name="Departure From" size="1">
  <option value="Los Angeles">Los Angeles</option>
  <option value="Utah">Utah</option>
  <option value="chicago">Chicago</option>
  <option value="Maine">Maine</option>
  <option value="Newyork">Newyork</option>
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
  <select><br>
  
  <b><label for="">class:</label></b><br>
  <select name="class" size="1">
  <option value="Economy">Economy</option>
  <option value="Primium">Primium</option>
  <option value="Business">Business</option>
  <select><br>
  
  <b><label for="">Departure Date:</label></b><br>
 <label for="start">Start date:</label>

	<input type="date" id="Departure" name="Departure Date"
       value="2021-01-01"
       min="2021-01-01" max="2030-12-31"><br>
	<b><label for="start">Return Date:</label></b>
	<input type="date" id="Return" name=" " value="2021-01-01" min="2021-01-01" max="2030-12-31"> 
  
 <input type="button" onclick="alert('Searching')" value="Search"> 
</fieldset> 
</form>
</body>
</html>

