<!DOCTYPE html>
<html>
<head>

  <title>fourth page</title>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
    #final{
      text-decoration: none;
      font-size: 20px;
      height: 40px;
      width: 150px;
      padding-top: 5px;
      text-align: center;
      border: 2px solid #262673;
      color: #292525;
      margin: 30px 20px;
      display: block;
      border-radius: 5%;
    }
    .size{
      margin-left: 20px;
      width: 1260px;
    }

  </style>


</head>
<body>


</div>

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
        <li><a href="fourth.php?divn=<?php echo $cat_rs['div_name']; ?>&dist=abcd&place=<?php echo $_GET['place']; ?>"><?php echo $cat_rs['div_name']; ?><a></li>
        <?php 
      } while ($cat_rs=mysqli_fetch_assoc($cat_query))
      ?>
    </ul>
  </div>

  <!-- hidden -->
  <div id="hid" class="dropdown">
    <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">hidden</button>
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
        <li><a href="fourth.php?divn=<?php echo $_GET['divn'] ?>&dist=<?php echo $cat_rs['dist_name']; ?>&place=<?php echo $_GET['place']; ?>"><?php echo $cat_rs['dist_name']; ?><a></li>
        <?php 

      } while ($cat_rs=mysqli_fetch_assoc($cat_query))
      ?>

    </ul>
  </div>
  <!-- hidden -->
  <div id="hi" class="dropdown">
    <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">hidden</button>
    <ul class="dropdown-menu">
      <li><a href="#">HTML</a></li>
    </ul>
  </div>
</div>


<div class="container">
  <form action="fourth.php?dist=<?php echo $_GET['divn'] ?>&place=<?php echo $_GET['place'] ?>&go=yes" method="post">
    <h2>Select train service</h2>
    <div class="checkbox"><label><input type="checkbox" name="train" value="marked">Train service</label></div>
    <h2>Select bus service</h2>
    <div class="checkbox"><label><input type="checkbox" name="hanif" value="marked">hanif poribohon</label></div>
    <div class="checkbox"><label><input type="checkbox" name="shahi" value="marked">shahi poribohon</label></div>
    <h2>choose your priority</h2>
    <div class="radio"><label><input type="radio" name="optradio" value="time">time</label></div>
    <div class="radio"><label><input type="radio" name="optradio" value="cost">cost</label></div>
     <button id="final" type="submit" class="btn btn-default">Submit</button>
  </form>
</div>


<?php
if(isset($_GET['go'] && $_POST['optradio']=="time")){
  // echo $_POST['train']."<br>";
  // echo $_POST['hanif']."<br>";
  // echo $_POST['shahi']."<br>";
  // echo $_POST['optradio']."<br>";
  // echo $_GET['place']."<br>";
  // echo $_GET['dist']."<br>";


  $cat_sql="SELECT * from location where location_name='".$_GET['place']."'";
  $cat_query=mysqli_query($dbconnect, $cat_sql);
  $cat_rs=mysqli_fetch_assoc($cat_query);



      //djkstra
  $visited=array();
  $distance=array();
  $gotit=0;
     //start=$_GET['dist'], end=$cat_rs['dist_name']
  function go(array &$visited,array &$distance,$start,$end){
    $isetq=array();
    $queue=array();

    $visited[$start]=$start;
    $queue[$start]=0;
    $distance[$start]=0;
    while (count($queue)) {
      $t = array_search(min($queue), $queue);
      $distance[$t]=$queue[$t];
      if($t==$end){
        $GLOBALS['gotit']=1;
        break;
      }

          //train
      $cat_sql="SELECT * FROM train_schedule where dist_name='".$t."'";
      $cat_query=mysqli_query($GLOBALS['dbconnect'], $cat_sql);

      while ($cat_rs=mysqli_fetch_assoc($cat_query)){ 
        $r=$cat_rs['destination'];
        
        if(!isset($isetq[$r])){
          if((!isset($visited[$r]) or ($queue[$r]>$queue[$t]+$cat_rs['price'])){
            $visited[$r]=array($t,"train",$cat_rs['price']);
            $queue[$r]=$queue[$t]+$cat_rs['price'];

          }

        } 
      }

           //bus
      $cat_sql="SELECT * FROM bus_schedule where dist_name='".$t."'";
      $cat_query=mysqli_query($GLOBALS['dbconnect'], $cat_sql);

      while ($cat_rs=mysqli_fetch_assoc($cat_query)){ 
        $r=$cat_rs['destination'];
        if(!isset($isetq[$r])){
          if(!isset($visited[$r]) or ($queue[$r]>$queue[$t]+$cat_rs['price'])){
            $visited[$r]=array($t,"bus",$cat_rs['price']);
            $queue[$r]=$queue[$t]+$cat_rs['price'];

          }
        }
      }
      unset($queue[$t]);
      $isetq[$t]=1;
    }
  }
  go($visited,$distance,$_GET['dist'],$cat_rs['dist_name']);

  if($gotit==1){

    $out= array();
    $p="--->".$cat_rs['dist_name'];
    array_push($out,$p);
    $run=$cat_rs['dist_name'];
    while (1) {

      if($visited[$run][0]==$_GET['dist']){
        $p=$visited[$run][0]."->".$visited[$run][1]."(".$visited[$run][2].")";
        array_push($out,$p);
        break;
      }
      else{
        $p="--->".$visited[$run][0]."->".$visited[$run][1]."(".$visited[$run][2].")";
        array_push($out,$p);
      }

      $run=$visited[$run][0];
    }

    $s="";
    for($p=sizeof($out)-1;$p>=0;$p--){
      $s=$s.$out[$p];

    }
    
    
  }

}

if(isset($_GET['go'] && $_POST['optradio']=="cost")){
  // echo $_POST['train']."<br>";
  // echo $_POST['hanif']."<br>";
  // echo $_POST['shahi']."<br>";
  // echo $_POST['optradio']."<br>";
  // echo $_GET['place']."<br>";
  // echo $_GET['dist']."<br>";


  $cat_sql="SELECT * from location where location_name='".$_GET['place']."'";
  $cat_query=mysqli_query($dbconnect, $cat_sql);
  $cat_rs=mysqli_fetch_assoc($cat_query);



      //djkstra
  $visited=array();
  $distance=array();
  $gotit=0;
     //start=$_GET['dist'], end=$cat_rs['dist_name']
  function go(array &$visited,array &$distance,$start,$end){
    $isetq=array();
    $queue=array();

    $visited[$start]=$start;
    $queue[$start]=0;
    $distance[$start]=0;
    while (count($queue)) {
      $t = array_search(min($queue), $queue);
      $distance[$t]=$queue[$t];
      if($t==$end){
        $GLOBALS['gotit']=1;
        break;
      }

          //train
      $cat_sql="SELECT * FROM train_schedule where dist_name='".$t."'";
      $cat_query=mysqli_query($GLOBALS['dbconnect'], $cat_sql);

      while ($cat_rs=mysqli_fetch_assoc($cat_query)){ 
        $r=$cat_rs['destination'];
        //echo $r." ".$t."<br>";
        if(!isset($isetq[$r])){
          if(!isset($visited[$r]) or ($queue[$r]>$queue[$t]+$cat_rs['price'])){
            $visited[$r]=array($t,"train",$cat_rs['price']);
            $queue[$r]=$queue[$t]+$cat_rs['price'];

          }

        } 
      }

           //bus
      $cat_sql="SELECT * FROM bus_schedule where dist_name='".$t."'";
      $cat_query=mysqli_query($GLOBALS['dbconnect'], $cat_sql);

      while ($cat_rs=mysqli_fetch_assoc($cat_query)){ 
        $r=$cat_rs['destination'];
        if(!isset($isetq[$r])){
          if(!isset($visited[$r]) or ($queue[$r]>$queue[$t]+$cat_rs['price'])){
            $visited[$r]=array($t,"bus",$cat_rs['price']);
            $queue[$r]=$queue[$t]+$cat_rs['price'];

          }
        }
      }
      unset($queue[$t]);
      $isetq[$t]=1;
    }
  }
  go($visited,$distance,$_GET['dist'],$cat_rs['dist_name']);

  if($gotit==1){

    $out= array();
    $p="--->".$cat_rs['dist_name'];
    array_push($out,$p);
    $run=$cat_rs['dist_name'];
    while (1) {

      if($visited[$run][0]==$_GET['dist']){
        $p=$visited[$run][0]."->".$visited[$run][1]."(".$visited[$run][2].")";
        array_push($out,$p);
        break;
      }
      else{
        $p="--->".$visited[$run][0]."->".$visited[$run][1]."(".$visited[$run][2].")";
        array_push($out,$p);
      }

      $run=$visited[$run][0];
    }

    $s="";
    for($p=sizeof($out)-1;$p>=0;$p--){
      $s=$s.$out[$p];

    }
    ?><div class="size" ><h2"><?php echo $s; ?></h2></div>
    <?php
  }

}


?>

<script>
  $("#hid").hide();
  $("#hi").hide();

</script>

</body>
</html>