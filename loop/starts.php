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
</body>
</html>