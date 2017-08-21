<!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>second page</title>

    <!-- Bootstrap 
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="font-awesome-4.6.3/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/animate.min.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <style>
    .mySlides {display:none;}
    </style>-->

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>



</head>
<body>

<?php
    $dbconnect = mysqli_connect("localhost", "root", "", "arround_bangladesh");
    if(mysqli_connect_errno()) {
        echo "Connection failed:".mysqli_connect_error();
        exit;
    }
   $x="aa";

?>


<!--Navigation-->
<div id="myNavbar" class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mynav"></button>
            <a href="second.php" class="navbar-brand">HOME</a>
        </div>
        <div class="navbar-collapse collapse" id="mynav">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#">how to go</a></li>
                <li><a href="#">where to stay</a></li>
                <li><a href="#">peoples</a></li>
                <li><a href="#">admin</a></li>
                
            </ul>
        </div>
    </div>
</div>
<p style="margin-top: 50px"></p>

<!--DROPDOWN-->

<div class="container">
  <h2>places </h2>
  <p>there are a lot of places in this country </p>
  <p>select which pace you want to go</p>
  <br>
  <h2>select division</h2>

  <div class="dropdown">
    <button id="divn" class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Dropdown Example
    <span class="caret"></span></button>
    <ul class="dropdown-menu">
      
        <?php
            $dist="a";
            $cat_sql="SELECT DISTINCT div_name FROM district";
            $cat_query=mysqli_query($dbconnect, $cat_sql);
            $cat_rs=mysqli_fetch_assoc($cat_query);
         
            do { ?> 
                <li><a href="#" onclick="change('divn','<?php echo $cat_rs['div_name'];?>','<?php $x=$cat_rs['div_name'];?>')"><?php echo $cat_rs['div_name']; ?><a></li>
             <?php 

            } while ($cat_rs=mysqli_fetch_assoc($cat_query))
        ?>

    </ul>
  </div>


  <br>
  <br>
  <h2>select district</h2>
  <div class="dropdown">
    <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Dropdown Example
    <span class="caret"></span></button>
    <ul class="dropdown-menu">
      <li><a href="#">HTML</a></li>
      <li><a href="#">CSS</a></li>
      <li><a href="#">JavaScript</a></li>
    </ul>
  </div>


  <br>
  <br>
  <h2>select spot</h2>
  <div class="dropdown">
    <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Dropdown Example
    <span class="caret"></span></button>
    <ul class="dropdown-menu">
      <?php
            $dist="a";
            $cat_sql="SELECT DISTINCT dist_name FROM district where div_name=$x ";
            $cat_query=mysqli_query($dbconnect, $cat_sql);
            $cat_rs=mysqli_fetch_assoc($cat_query);
         
            do { ?> 
                <li><a href="#"><?php echo $cat_rs['dist_name']; ?><a></li>
             <?php 

            } while ($cat_rs=mysqli_fetch_assoc($cat_query))
        ?>
    </ul>
  </div>
</div>






<script>
    function change(cat,nam,bal){

        document.getElementById(cat).textContent=nam;

    }
</script>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins)
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
     Include all compiled plugins (below), or include individual files as needed 
    <script src="js/wow.min.js"></script>
    <script>new WOW().init();</script>
    <script src="js/bootstrap.min.js"></script> -->
</body>
</html>