
<!DOCTYPE html>
<html>
<body>

<?php
    $dbconnect = mysqli_connect("localhost", "root", "", "arround_bangladesh");
     $visited=array();
     $gotit=0;
    function go(array &$visited,$start,$end){
    	
    	$queue=array();
    	
    	$visited[$start]=1;
    	array_push($queue, $start);
    	while (count($queue)) {
    		$t = array_shift($queue);
    		$cat_sql="SELECT * FROM train_schedule where dist_name='".$t."'";
    		$cat_query=mysqli_query($GLOBALS['dbconnect'], $cat_sql);
    		
    		while ($cat_rs=mysqli_fetch_assoc($cat_query)){ 
    			$r=$cat_rs['destination'];
    			if(!isset($visited[$r])){
    				$visited[$r]=$t;
    				array_push($queue,$r);
    				echo $r."<br>";
    				if($r==$end){
    					echo "<br>"." gotit!!";
    					$GLOBALS['gotit']=1;
    					break;
    				}
    			}

            } 

    	}
    }
    go($visited,'chittagong','hathajari');
    if($gotit==1){
    	echo "rajshahi"." ";
    	$run='rajshahi';
    	while (1) {
    		echo $visited[$run]." ";
    		if($visited[$run]=='chittagong'){

    			break;
    		}
    		$run=$visited[$run];
    	}
    }
    else{
    	echo " not found";
    }

 
?>

</body>
</html>