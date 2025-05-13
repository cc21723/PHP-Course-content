<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>字串處理</title>
    <style>
        h1{
            text-align:center;
            font-size:1.5em;
            color:blue;
            border-bottom:1px solid #ccc;
            padding-bottom:10px;
        }
    </style>
</head>
<body>
 <h1>字串處理</h1> 
 <h2>字串取代</h2>
 <p>將”aaddw1123”改成”*********”</p>

<?php
$str="aadsafdsfs13";
/* $str=str_replace("a","*",$str);
$str=str_replace("d","*",$str);
$str=str_replace("w","*",$str);
$str=str_replace("1","*",$str);
$str=str_replace("2","*",$str);
$str=str_replace("3","*",$str); */
//$str=str_replace("aaddw1123","*********",$str);
//$str=str_replace(["a","d","w","1","2","3"],"*",$str);
//$str=str_replace(str_split($str,1),"*",$str);
$str=str_repeat("*",strlen($str));


echo $str;

?>
<h2>字串分割</h2>
<p>將”this,is,a,book”依”,”切割後成為陣列</p>
<?php
$str="this,is,a,book";
$str=explode(",",$str); 

echo "<pre>";
print_r($str);
echo "</pre>";

?>
<h2>字串組合</h2>
<p>將上例陣列重新組合成“this is a book”</p>
<?php
$str=join(" ",$str);
echo $str;
?>
</body>
</html>