<?php $card ="カード"; ?>
<?php echo $card; ?>
<form  action ="<?=$_SERVER['PHP_SELF']?>" method ="post">
	<!--<input type = "text" name ="keyword">-->
	<input type = "submit" name="send" value ="引く">
</form>
<?php 
$bool = is_string($_POST["send"]);
var_dump($bool);
echo "<br>";
?>
<?php
$suits = array("♠","♥","♦","♣");
$number = array("1","2","3","4","5","6","7","8","9","10","11","12","13");
$deck=array();

//二つの配列を組み合わせている
foreach($suits as $suit){
	foreach($number as $num){
		$deck[] = array("num"=>$num,"suit"=>$suit);		
	}
}

if($bool === true){		
	//--user引いたものをためる
	//deckをランダムに切っている。配列をランダムにしている
	shuffle($deck);
	//array_shift 配列の先頭を取り出す。配列の中身は減る模様
	//var_dump($deck);
	$card = array_shift($deck);
	echo $card['suit'].":".$card['num']."<br>";
	$user =array();
	$user[] = $card;
	var_dump("user:".$card['suit'].":".$card['num']."<br>");
echo "<hr>";
	//--ｃｐ引いたものをためる
	shuffle($deck);
	//var_dump($deck);
	$card = array_shift($deck);
	echo $card['suit'].":".$card['num']."<br>";
	$cp =array();
	$cp[] = $card;
	var_dump("user:".$card['suit'].":".$card['num']."<br>");
	//array_diff($deck,$user); 配列の差分を計算
}else{
	echo "非表示";
}
?>