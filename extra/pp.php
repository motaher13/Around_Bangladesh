<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
<?php
    $i=3;
    $j=0;
    while ($i<6) {
       $i++;
       echo "i=".$i;
       while (1) {
           $j++;
           echo "j=".$j;
           if($j>5)

            break;
       }
    }

?>
</body>
</html>