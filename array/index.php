<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>陣列</title>
</head>
<body>
<h1>陣列設計</h1>    
<?php

$students=[
    'judy'=>[ '國文' => 95, '英文' => 64, '數學' => 70, '地理' => 90, '歷史' => 84 ],
    'amo'=>[ '國文' => 88, '英文' => 78, '數學' => 54, '地理' => 81, '歷史' => 71 ],
    'john'=>[ '國文' => 45, '英文' => 60, '數學' => 68, '地理' => 70, '歷史' => 62 ],
    'peter'=>[ '國文' => 59, '英文' => 32, '數學' => 77, '地理' => 54, '歷史' => 42 ],
    'hebe'=>[ '國文' => 71, '英文' => 62, '數學' => 80, '地理' => 62, '歷史' => 64 ]
];


foreach($students as $name => $score){
    
    echo $name."=";
    echo "<ul style='list-style-type:circle'>";
    foreach($score as $subject => $s){
        echo "<li >";
        echo $subject .":";
        echo $s;
        echo "</li>";
    }
    echo "</ul>";
}


//建立一個變數來儲存$students的所有鍵名 $names=['judy','amo','john','peter','hebe'];
$names=array_keys($students);

//建立一個迴圈來印出$names的所有鍵名
for($i=0;$i<count($names);$i++){

    //建立一個變數$n來儲存$students[$names[$i]]
    //例:$names[0]=>'judy';
    //例:$students['judy']=>[ '國文' => 95, '英文' => 64, '數學' => 70, '地理' => 90, '歷史' => 84 ];

    $n=$students[$names[$i]];

    //建立一個變數來儲存$students[$names[$i]]的所有鍵名 $subjects=['國文','英文','數學','地理','歷史'];
    $subjects=array_keys($n);

    //先印出名字及文字
    echo $names[$i];
    echo "的成績<br>";

    //建立一個迴圈來印出$n的所有值
    for($j=0;$j<count($n);$j++){

        //印出$subjects[$j]的值
        echo $subjects[$j];
        echo ":";
        //印出$n[$subjects[$j]]的值也就是成績
        echo $n[$subjects[$j]];
        echo "<br>";
    }  

    //print_r($students[$names[$i]]);
//    echo $names[$i];
}

$sss=serialize($students);
echo $sss;
echo "<br>";
$aa=unserialize($sss);
print_r($aa);
echo "<hr>";
$sss=json_encode($students);
echo $sss;
echo "<br>";
$aa=json_decode($sss);
print_r($aa);

?>

<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
</body>
</html>