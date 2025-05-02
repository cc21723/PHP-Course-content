<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>回圈畫星星</title>
</head>
<body>
    <h2>三角形</h2>    
<?php
for($i=0;$i<5;$i++){
    for($j=0;$j<5;$j++){
        if($i>=$j){
            echo "*";
        }
    }

    echo "<br>";
}

?>
    <h2>倒三角形</h2>    
<?php
for($i=0;$i<5;$i++){
    for($j=0;$j<5;$j++){
        if($i<=$j){
            echo "*";
        }
    }

    echo "<br>";
}
?>

<h2>倒三角形</h2>    

<?php
for($i=4;$i>=0;$i--){
    for($j=0;$j<5;$j++){
        if($i>=$j){
            echo "*";
        }
    }

    echo "<br>";
}

?>
<h2>正三角形</h2>
<style>
    *{
        font-family:'Courier New', Courier, monospace;
    }
</style>
<?php

$stars=5;

for($i=0;$i<$stars;$i++){

    for($k=0;$k<$stars-1-$i;$k++){
        echo "&nbsp;";

    }


    for($j=0;$j<$i*2+1;$j++){

        echo "*";

    }

    echo "<br>";
}



?>

<h2>菱形</h2>
<?php

$stars=11;

if($stars%2==0){
    $stars=$stars+1;
}

for($i=0;$i<$stars;$i++){

    if($i<=floor($stars/2)){
        $y=$i;
    }else{
        $y=$stars-1-$i;
    }

    for($j=0;$j<floor($stars/2)-$y;$j++){
        echo "&nbsp;";
    }

    for($k=0;$k<$y*2+1;$k++){
        echo "*";
    }
    echo "<br>";
}


?>

<h3>矩形</h3>
<?php
$w=5;
for($i=0;$i<$w;$i++){

    for($j=0;$j<$w;$j++){

        if($i==0 || $i==$w-1 || $j==0  || $j==$w-1){
            echo "*";
        }else{
            echo "&nbsp;";
        }
        

    }

    echo "<br>";
}


?>


<h3>對角線</h3>
<?php
$w=11;
for($i=0;$i<$w;$i++){

    for($j=0;$j<$w;$j++){

        if($i==0 || $i==$w-1 || $j==0  || $j==$w-1 || $i==$j || $i==$w-1-$j){
            echo "*";
        }else{
            echo "&nbsp;";
        }
        

    }

    echo "<br>";
}

?>
<h2>菱形對角線</h2>
<?php



$stars=21;

if($stars%2==0){
    $stars=$stars+1;
}

for($i=0;$i<$stars;$i++){

    if($i<=floor($stars/2)){
        $y=$i;
    }else{
        $y=$stars-1-$i;
    }

    for($j=0;$j<floor($stars/2)-$y;$j++){
        echo "&nbsp;";
    }
    //echo "$j";

    for($k=0;$k<$y*2+1;$k++){
        if(($y+$k+$j)==floor($stars/2) || 
            abs($y-($k+$j))==floor($stars/2) || 
            ($k+$j)==floor($stars/2) || 
            $i==floor($stars/2) ){
            echo "*";
        }else{
            echo "&nbsp;";
        }
    }
    echo "<br>";
}

?>


<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
</body>
</html>