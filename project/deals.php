<html>
<head>
</head>
<fieldset>
    <h1><legend>Deals</legend></h1>
	<body>
	<b><label>From:</label><br>
	<input type="text" name="From" value=""><br>
	<b><label>To:</label><br>
	<input type="text" name="To" value=""><br>
<form action="/action_page.php">
  <b><label for="Sort">Sort:</label><br>
  <select name="Sort" size="1">
  <option value="Most Popular">Most Popular</option>
  <option value="Biggest Price">Biggest price</option>
  <option value="Lowest price">Lowest Price</option>
  <option value="Name Ascending">Name Ascending</option>
  <option value="Name Descending">Name Descending</option>
  </select><br>
  
  <p><input type="button" onclick="alert('Searching')" value="Search"></p>
  </fieldset> 
</form>
</body>
</html>
