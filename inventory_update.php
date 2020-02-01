<?php
	include 'database.php';
	$query = "SELECT * FROM coffeehouse ORDER BY 'name'";
	$container_2 = mysqli_query($conn, $query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name=viewport content="width=device-width, initial-scale=1">
	<link href="https://fonts.googleapis.com/css?family=Pacifico&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300&display=swap" rel="stylesheet">
	<title> Coffee Houses Table </title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/main.css" rel="stylesheet">
</head>

<body>
<div id="container_3">

<h1>Coffee House Inventory</h1>



<p class="middle"><a href="coffee_form.php">Add a new coffee house!</a></p>


<p class="middle">Then click the "Back Home" button at the bottom of the table to go to the home page.</p>

<!--
     the form below is handled by the PHP file named in the action= attribute
-->

<table class="table">
	 <thead class="thead-dark">
	<!-- table column headings -->
	<tr>
	  <th>Name</th>
	  <th>City or Town</th>
	  <th>Preferred Coffee Order</th>
	  <th>What is it best for?</th>
	</tr>
</thead>

<!-- Begin PHP while-loop to display database query results
     with each row enclosed in TD tags.
     Each time it loops, it writes ONE ROW.
	 This code depends on the first 5 lines at the start of this file.
	 $container_2 comes from that code.
	 NOTE all form controls must have a name= attribute.
     -->
<?php while ($row = mysqli_fetch_assoc($container_2)) :  ?>

<tr>
  <td><?php echo stripslashes($row['name']); ?></td>
  <td><?php echo $row['city']; ?></td>
  <td><?php echo $row['preference']; ?></td>
  <td><?php echo $row['best']; ?></td>
</tr><!-- end of HTML table row -->

<?php endwhile;  ?>
<!-- end the PHP while-loop
     everything else on this page is normal HTML -->

</table>

<a href="index.html" class="btn btn-outline-secondary">Let's Go Back Home!</a>

<!-- close the form -->
</form>


</div> <!-- close container -->
</body>
</html>
