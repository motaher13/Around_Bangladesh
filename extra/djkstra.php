
<!DOCTYPE html>
<html>
<body>

<?php
    $dbconnect = mysqli_connect("localhost", "root", "", "arround_bangladesh");
     $visited=array();
     $distance=array();
     $gotit=0;
    function go(array &$visited,array &$distance,$start,$end){
    	
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
    			if(!isset($visited[$r]) or ($queue[$r]>$queue[$t]+$cat_rs['price'])){
    				$visited[$r]=array($t,"train");
                    $queue[$r]=$queue[$t]+$cat_rs['price'];

    			}

            } 

             //bus
            $cat_sql="SELECT * FROM bus_schedule where dist_name='".$t."'";
            $cat_query=mysqli_query($GLOBALS['dbconnect'], $cat_sql);
            
            while ($cat_rs=mysqli_fetch_assoc($cat_query)){ 
                $r=$cat_rs['destination'];
                if(!isset($visited[$r]) or ($queue[$r]>$queue[$t]+$cat_rs['price'])){
                    $visited[$r]=array($t,"bus",$cat_rs['price']);
                    $queue[$r]=$queue[$t]+$cat_rs['price'];

                }
            }
            unset($queue[$t]);

    	}
    }
    go($visited,$distance,$_GET['dist'],$cat_rs['dist_name']);
    if($gotit==1){

    	echo $cat_rs['dist_name']." ";
    	$run=$cat_rs['dist_name'];
    	while (1) {
    		echo $visited[$run][0]." 1".$visited[$run][1]."<br>";
    		if($visited[$run][0]==$_GET['dist']){
    			break;
    		}
    		$run=$visited[$run][0];
    	}
        echo "<br>".$distance[$cat_rs['dist_name']];
    }
    else{
    	echo " not found";
    }

 
?>

</body>
</html>