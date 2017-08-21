<!DOCTYPE html>
<html>
<head>
	<title>third page</title>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
      img{
        width: 500px;
        height: 300px;
        margin-left: 350px;
        margin-bottom: 20px;
      }
      p{
        color: #362B2B;
        font-size: 18px;
      }
      h1{
        color: #2F2D2D;
        font-weight: 50;
        text-align: center;
        margin: 0;
        padding-bottom: 20px;
      }
      
  </style>
</head>
<body>

<?php
    $dbconnect = mysqli_connect("localhost", "root", "", "arround_bangladesh");
    if(mysqli_connect_errno()) {
        echo "Connection failed:".mysqli_connect_error();
        exit;
    }


?>
 <?php
     $cat_sql="SELECT * FROM location where location_name='".$_GET['place']."'";
     $cat_query=mysqli_query($dbconnect, $cat_sql);
     $cat_rs=mysqli_fetch_assoc($cat_query);
         
 ?>

<!-- navbar -->
<div id="myNavbar" class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mynav"></button>
            <a href="second.php" class="navbar-brand">HOME</a>
        </div>
        <div class="navbar-collapse collapse" id="mynav">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="fourth.php?place=<?php echo $_GET['place'] ?>">how to go</a></li>
                <li><a href="#">where to stay</a></li>
                <li><a href="#">peoples</a></li>
                <li><a href="#">admin</a></li>
                
            </ul>
        </div>
    </div>
</div>
<p style="margin-top: 70px"></p>

<!-- content-->
<div class="container">
    <h1><?php echo $cat_rs['location_name']; ?></h1>
	<div id="im"><img src="images/<?php echo $cat_rs['picture']; ?>"></div>
    <p><?php echo $cat_rs['details']; ?></p>
	
</div>

</body>
</html>