<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://fonts.googleapis.com/css?family=Pacifico&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300&display=swap" rel="stylesheet">
  <title>Coffee Houses</title>
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/main.css" rel="stylesheet">
</head>

<body>
  <div id="container_2">
        <h1 id="fav_coffee">What's your favorite coffee house in Florida?</h1>
        <h2 id="fill">Fill out here!</h2>


    <form id="coffee_form" method="post" action="" autocomplete="off">

        <div class="form-group">
          <label class="form-control-label" for="place">Name of Coffee House</label>
          <input class="form-control" type="text" name="name" id="name" rows="1">
       </div>

       <div class="form-group">
         <label class="form-control-label" for="album">City or Town It Is Located</label>
         <input class="form-control" type="text" name="city" id="city" rows="1">
      </div>

      <div class="form-group">
        <label class="form-control-label" for="lyric">Preferred Coffee Order</label>
        <input class="form-control" name="preference" id="preference" rows="1">
      </div>

      <div class="form-group">
        <label class="form-control-label" for="lyric">What it's best for? (ex:studying, hanging out, etc.)</label>
        <input class="form-control" name="best" id="best" rows="1">
      </div>


      <div class="form-group">
        <input class="btn btn-outline-primary" type="submit" value="Submit">
        <input class="btn btn-outline-secondary" type="reset" value="Reset Entry">
        <a href="inventory_update.php" class="btn btn-outline-secondary">View Responses</a>
      </div>
  </form>
</div>

<div id="response"></div>

</div>

<script src="js/enter.js"></script>


</body>
</html>
