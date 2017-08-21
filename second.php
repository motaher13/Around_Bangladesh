<!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>second page</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
      #final{
        text-decoration: none;
        
        height: 80px;
        width: 500px;
        padding-top: 22spx;
        background-color: #262673;
        
        margin: auto;
        display: block;
        border-radius: 15%;
      }
      #btn{
        font-size: 25px;
        color: #b3b3b3;
        text-align: center;
        padding-top: 10px;
        margin: 0 auto;
      }

  </style>


</head>
<body>

<?php
    $dbconnect = mysqli_connect("localhost", "root", "", "arround_bangladesh");
    
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
    <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">division
    <span class="caret"></span></button>
    <ul class="dropdown-menu">
      
        <?php
            $cat_sql="SELECT DISTINCT div_name FROM district";
            $cat_query=mysqli_query($dbconnect, $cat_sql);
            $cat_rs=mysqli_fetch_assoc($cat_query);
         
            do { ?> 
                <li><a href="second.php?divn=<?php echo $cat_rs['div_name']; ?>&dist=abcd&place=abcd"><?php echo $cat_rs['div_name']; ?><a></li>
             <?php 

            } while ($cat_rs=mysqli_fetch_assoc($cat_query))
        ?>

    </ul>
  </div>

  
   <div  class="dropdown" hidden>
    <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">hidden
    <ul class="dropdown-menu">
      <li><a href="#">HTML</a></li>
    </ul>
  </div>

  <br>
  <br>
  <h2>select district</h2>
  <div class="dropdown">
    <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">district
    <span class="caret"></span></button>
    <ul class="dropdown-menu">
      
        <?php
            $cat_sql="SELECT * FROM district where div_name='".$_GET['divn']."'";
            $cat_query=mysqli_query($dbconnect, $cat_sql);
            $cat_rs=mysqli_fetch_assoc($cat_query);
         
            do { ?> 
                <li><a href="second.php?divn=<?php echo $_GET['divn'] ?>&dist=<?php echo $cat_rs['dist_name']; ?>&place=abcd"><?php echo $cat_rs['dist_name']; ?><a></li>
             <?php 

            } while ($cat_rs=mysqli_fetch_assoc($cat_query))
        ?>

    </ul>
  </div>


  <div hidden class="dropdown">
    <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">hidden
    <ul class="dropdown-menu">
      <li><a href="#">HTML</a></li>
    </ul>
  </div>

  <br>
  <br>
  <h2>select place</h2>
  <div class="dropdown">
    <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">place
    <span class="caret"></span></button>
    <ul class="dropdown-menu">
      
        <?php
            $cat_sql="SELECT * FROM location where dist_name='".$_GET['dist']."'";
            $cat_query=mysqli_query($dbconnect, $cat_sql);
            $cat_rs=mysqli_fetch_assoc($cat_query);
         
            do { ?> 
                <li><a href="second.php?divn=<?php echo $_GET['divn'] ?>&dist=<?php echo $_GET['dist'] ?>&place=<?php echo $cat_rs['location_name']; ?>"><?php echo $cat_rs['location_name']; ?><a></li>
             <?php 

            } while ($cat_rs=mysqli_fetch_assoc($cat_query))
        ?>
        
    </ul>
  </div>

  <a id="final" href="third.php?place=<?php echo $_GET['place'] ?>"><p id="btn">LET'S GO!!</p></a>

</div>

</body>
</html>