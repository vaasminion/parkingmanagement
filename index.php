<!DOCTYPE html>
<html>
<head>
  <title>Parking</title>
  	<link rel="stylesheet" type="text/css" href="./css/style.css">
    <link rel="stylesheet" type="text/css" href="./css/index/index.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>
  <?php include("include/header.php")?>
  <div id="homepage">
    <div id="top">
      <div id="searchbox">
      <h1>Find Nearest Parking Space</h1>
      <h3>Start Searching By Location</h3>
    <!--</div>
    <div id="searchsection">-->
      <div>
        <!--<input type="text" class="parking_search" placeholder="Where You Want To Park?" value="">-->
        <form id="searchbind" action="include/searchplace.php" method="post">
        <select class="parking_search">
          <option class="parkingoption" value="" disabled selected>Select Parking Location</option>
          <option class="parkingoption" value="Ghaziabad">Ghaziabad</option>
          <option class="parkingoption" value="Delhi">Delhi</option>
          <option class="parkingoption" value="Noida">Noida</option>
        </select>
        <button type='submit' name=search class = "search_button">Search</button>
      </form>
      </div>
      </div>
      <div id="searchboximagebox">
        <img id="car" src="image/car_signal2.png">
      </div>
    </div>
    <div id="middle">
      <div id="threecitiesimage">
        <img id="city" src="./image/city.png" >
      </div>
      <div id="threecities">
      <h1>THREE CITIES, VARIOUS LOCATION</h1>
    </div>

    </div>
    <div id="last">
      <img style="width:30vh; max-width: 100%;height: auto;"  src="./image/car.png">
      <div id="bookspace" style="//background: darkgoldenrod; font-size: 1vw;"><h2>Search Location, Book Space & Start Saving</h2></div>
    </div>
</body>
