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

<h2>子字串取用</h2>
<p>將” The reason why a great man is great is that he resolves to be a great man”只取前十字成為” The reason…”</p>
<?php
$str="將”The reason why a great man is great is that he resolves to be a great man";

$str=mb_substr($str,0,10,"utf-8") . "...";

echo $str;


?>

<h2>尋找字串與HTML、css整合應用</h2>

<ul>
    <li>給定一個句子，將指定的關鍵字放大</li>
    <li>“學會PHP網頁程式設計，薪水會加倍，工作會好找”</li>
    <li>請將上句中的 “程式設計” 放大字型或變色.</li>
</ul>
<?php
$str="學會PHP網頁程式設計，薪水會加倍，工作會好找";
$keyword="PHP";

$words="程式設計";
$style="font-size:3em;color:green;";

$str=str_replace("$keyword","<span style='$style'>$keyword</span>",$str);

echo $str;




?>
<hr>
<?php
$str="美國總統川普（Donald Trump）的「對等關稅」政策再有新變化！美中雙方上週末在瑞士日內瓦舉行的貿易談判中達成共識，同意於5月14日前互降關稅90天。針對川普對等關稅政策出現急轉彎，是否意味著美中關稅戰徹底休兵？財訊傳媒董事長謝金河就發文點出川普談判策略出現重大轉折的原因，並以川普大作《交易的藝術》預測美中貿易戰略的關鍵4部曲。
美中兩國在台灣時間12日發表共同聲明，表示雙方達成互降關稅90天的共識，自14日起美國將暫把原對中國關稅從145％降至30％，而中國則是把對美課稅從125％降至10％，降幅高達115％。消息讓市場一片驚愕。謝金河12日就在臉書以「是驚嚇？還是驚喜？山不轉，川普先轉！」為題，解讀川普談判策略出現重大轉折的隱藏內幕。
美中關稅戰休兵不打了？新台幣「翻貶跳水」謝金河曝關鍵數字：機會很大
他首先提到，自己先前就曾指出美中兩國持續互加關稅的舉措，實際上毫無意義，因為「稅率超過50%，邊際效應已經很低，稅率超過100%，等於雙方不會有往來」，而他也預言川普猛課關稅的最終結局，「一定會撞到牆壁，最後一定會自己找台階下」。而近來川普接連放低姿態、蹲下來兩次的作法，也讓謝金河的預言得到驗證，「其中一次是4月12日宣布對75個國家豁免90天，接下來是美國財長4月22日透露川普將對中國降關稅」。";
echo $str;

$keyword="川普";
$keyword2="關稅";
$style="font-size:1.1em;color:green;";
$style2="font-size:1.1em;color:red;";
$str=str_replace("$keyword","<span style='$style'>$keyword</span>",$str);
$str=str_replace("$keyword2","<span style='$style2'>$keyword2</span>",$str);

echo "<hr>";
echo $str;




?>



<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
</body>
</html>