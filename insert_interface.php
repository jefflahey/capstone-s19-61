
<!DOCTYPE html>
<html lang="en">
<head>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
 
<meta charset="UTF-8">
 
<!-- If IE use the latest rendering engine -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
 
<!-- Set the page to the width of the device and set the zoon level -->
<meta name="viewport" content="width = device-width, initial-scale = 1">
<title>Modification</title>

<style>
.jumbotron{
    background-color:#2E2D88;
    color:white;
}
/* Adds borders for tabs */
.tab-content {
    border-left: 1px solid #ddd;
    border-right: 1px solid #ddd;
    border-bottom: 1px solid #ddd;
    padding: 10px;
}
.nav-tabs {
    margin-bottom: 0;
}
</style>
 
<div class="container">
	<div class="page-header">
	<h1>Modification Page/Insert</h1>
	</div>
</div>
 

</head>
<body>
<div class="container">
	<nav class="navbar navbar-default">
		<div class="container-fluid">
			<div class="navbar-header">
				<a class="navbar-brand" href="#">Which table would you like to insert into?</a>
			</div>
			<ul class="nav navbar-nav">
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">Choose here:<span class="caret"></span></a>
					<ul class="dropdown-menu">
                        <li><a data-toggle="collapse" data-target="#Barforms">Bar</a></li>
                        <li><a data-toggle="collapse" data-target="#Beerforms">Item/Beer</a></li>
                        <li><a data-toggle="collapse" data-target="#Drinkerforms">Drinker</a></li>
                        <li><a data-toggle="collapse" data-target="#Transactionforms">Transaction</a></li>
                        <li><a data-toggle="collapse" data-target="#Likesforms">Likes</a></li>
                        <li><a data-toggle="collapse" data-target="#Frequentsforms">Frequents</a></li>
                        <li><a data-toggle="collapse" data-target="#Sellsforms">Sells</a></li>
					</ul>
				</li>
			</ul>
  </div>
  
</nav>
</div>

	<form>
        <button type="button" class="btn btn-primary" onclick="location.href='index.php'">Home</button>
    </form> 	

<div class="collapse" id="Barforms">
  <div class="card card-body">
    <h3>Bar:</h3>
    <form action="insertbar.php">
      <div class="form-group">
		    <label for="Input">Bar name</label>
		    <input type="form" class="form-control" placeholder="Enter bar name here" name="barname" required="true">
	    </div>
      <div class="form-group">
		    <label for="Input">Street Address:</label>
		    <input type="form" class="form-control" placeholder="Enter Street Address here" name="barAddress">
	    </div>
      <div class="form-group">
		    <label for="Input">City:</label>
		    <input type="form" class="form-control" placeholder="Enter City here" name="barcity">
	    </div>
      <div class="form-group">
		    <label for="Input">Postal Code:</label>
		    <input type="form" class="form-control" placeholder="Enter Postal Code here" name="barpostalcode">
	    </div>
      <div class="form-group">
		    <label for="Input">State (i.e. NJ, CA):</label>
		    <input type="form" class="form-control" placeholder="Enter State here" name="barstate" required="true">
	    </div>
      <div class="form-group">
		    <label for="Input">Phone number:</label>
		    <input type="form" class="form-control" placeholder="Enter phone number here" name="barphone">
	    </div>
      <div class="form-group">
		    <label for="Input">Opening time:</label>
		    <input type="form" class="form-control" placeholder="Enter opening time here" name="barot" required="true">
	    </div>
      <div class="form-group">
		    <label for="Input">Closing time:</label>
		    <input type="form" class="form-control" placeholder="Enter closing time here" name="barct" required="true">
	    </div>
      <button type="submit" class="btn btn-primary">Submit</button>
			<button type="button" class="btn btn-primary" data-toggle="collapse" data-target="#Barforms">Hide</button>
    </form>
  </div>
</div>

<div class="collapse" id="Beerforms">
  <div class="card card-body">
    <h3>Item/Beer:</h3>
    <form action="insertitem.php">
      <div class="form-group">
		    <label for="Input">Item/beer name</label>
		    <input type="form" class="form-control" placeholder="Enter item/beer name here" name="itemname" required="true">
	    </div>
      <div class="form-group">
		    <label for="Input">Is this item a beer?</label>
		    <select name = "ifbeerinput" required="true">
            <option value=1>Yes</option>
            <option value=0>No</option>
        </select><br><br>
	    </div>
      <div class="form-group">
		    <label for="Input">If it is a beer, what is the manufacturer?</label>
		    <input type="form" class="form-control" placeholder="Enter manufacturer's name here" name="beermanf">
	    </div>
      <button type="submit" class="btn btn-primary">Submit</button>
			<button type="button" class="btn btn-primary" data-toggle="collapse" data-target="#Beerforms">Hide</button>
    </form>
  </div>
</div>

<div class="collapse" id="Drinkerforms">
  <div class="card card-body">
    <h3>Drinker:</h3>
    <form action="insertdrinker.php">
      <div class="form-group">
		    <label for="Input">Drinker name:</label>
		    <input type="form" class="form-control" placeholder="Enter drinker name here" name="drinkername" required="true">
	    </div>
      <div class="form-group">
		    <label for="Input">Street Address:</label>
		    <input type="form" class="form-control" placeholder="Enter Street Address here" name="drinkerAddress">
	    </div>
      <div class="form-group">
		    <label for="Input">City:</label>
		    <input type="form" class="form-control" placeholder="Enter City here" name="drinkercity">
	    </div>
      <div class="form-group">
		    <label for="Input">State (i.e. NJ, CA):</label>
		    <input type="form" class="form-control" placeholder="Enter State here" name="drinkerstate" required="true">
	    </div>
      <div class="form-group">
		    <label for="Input">Phone number:</label>
		    <input type="form" class="form-control" placeholder="Enter phone number here" name="drinkerphone">
	    </div>
      <button type="submit" class="btn btn-primary">Submit</button>
			<button type="button" class="btn btn-primary" data-toggle="collapse" data-target="#Drinkerforms">Hide</button>
    </form>
  </div>
</div>

<div class="collapse" id="Transactionforms">
  <div class="card card-body">
    <h3>Transaction:</h3>
		<form action="inserttransaction.php">
      <div class="form-group">
		    <label for="Input">Drinker name:</label>
		    <input type="form" class="form-control" placeholder="Enter name of drinkers here" name="drinkername" required="true">
	    </div>
      <div class="form-group">
		    <label for="Input">Bar name:</label>
		    <input type="form" class="form-control" placeholder="Enter name of bar here" name="barname">
	    </div>
      <div class="form-group">
		    <label for="Input">Item name:</label>
		    <input type="form" class="form-control" placeholder="Enter name of item here" name="itemname">
	    </div>
      <div class="form-group">
		    <label for="Input">Quantity?</label>
		    <input type="form" class="form-control" placeholder="Enter quantity here" name="quantity" required="true">
	    </div>
      <div class="form-group">
				<label for="Input">Tip percent?</label>
				<input type="form" class="form-control" placeholder="Enter tip percentage here" name="tip" required="true">
			</div>
      <div class="form-group">
		    <label for="Input">Date and Time:</label>
		    <input type="form" class="form-control" placeholder="Enter in datetime format here" name="datetime">
	    </div>
      <button type="submit" class="btn btn-primary">Submit</button>
			<button type="button" class="btn btn-primary" data-toggle="collapse" data-target="#Transactionforms">Hide</button>
    </form>
  </div>
</div>

<div class="collapse" id="Likesforms">
  <div class="card card-body">
    <h3>Likes:</h3>
    <form action="insertlike.php">
      <div class="form-group">
		    <label for="Input">Drinker name:</label>
		    <input type="form" class="form-control" placeholder="Enter drinker name here" name="likesdrinker" required="true">
	    </div>
      <div class="form-group">
		    <label for="Input">Item name:</label>
		    <input type="form" class="form-control" placeholder="Enter item name here" name="likesitem" required="true">
	    </div>      
      <button type="submit" class="btn btn-primary">Submit</button>
			<button type="button" class="btn btn-primary" data-toggle="collapse" data-target="#Likesforms">Hide</button>
    </form>
  </div>
</div>

<div class="collapse" id="Frequentsforms">
  <div class="card card-body">
    <h3>Frequents:</h3>
    <form action="insertfrequent.php">
      <div class="form-group">
		    <label for="Input">Drinker name:</label>
		    <input type="form" class="form-control" placeholder="Enter drinker name here" name="frequentsdrinker" required="true">
	    </div>
      <div class="form-group">
		    <label for="Input">Bar name:</label>
		    <input type="form" class="form-control" placeholder="Enter bar name here" name="frequentsbar" required="true">
	    </div>      
      <button type="submit" class="btn btn-primary">Submit</button>
			<button type="button" class="btn btn-primary" data-toggle="collapse" data-target="#Frequentsforms">Hide</button>
    </form>
  </div>
</div>

<div class="collapse" id="Sellsforms">
  <div class="card card-body">
    <h3>Sell:</h3>
    <form action="insertsell.php">
      <div class="form-group">
		    <label for="Input">Bar name:</label>
		    <input type="form" class="form-control" placeholder="Enter bar name here" name="sellsbar" required="true">
	    </div>
      <div class="form-group">
		    <label for="Input">Item name:</label>
		    <input type="form" class="form-control" placeholder="Enter item name here" name="sellsitem" required="true">
	    </div>
      <div class="form-group">
		    <label for="Input">Price:</label>
		    <input type="form" class="form-control" placeholder="Enter item price here" name="sellsprice" required="true">
	    </div>      
      <button type="submit" class="btn btn-primary">Submit</button>
			<button type="button" class="btn btn-primary" data-toggle="collapse" data-target="#Frequentsforms">Hide</button>
    </form>
  </div>
</div>


</body>
</html>