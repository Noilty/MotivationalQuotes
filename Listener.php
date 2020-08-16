<?php
$iUpDate = 60;
header("Refresh:".$iUpDate);

$mQuotes = require_once('mQuotes.php');
mt_srand(intdiv(time(), $iUpDate));
$iRandQuote = rand(0, count($mQuotes)-1);
$mResult = [
	'numQuotes' => $iRandQuote,
	'author' => $mQuotes[$iRandQuote]['author'],
	'quote' => $mQuotes[$iRandQuote]['quote'],
	'countQuotes' => count($mQuotes)
];
?>
<style>
html {
    font: 15px / 1.4 sans-serif;
    font-weight: normal;
    font-family: sans-serif;
    font-family: 'Segoe UI','Helvetica Neue',Helvetica,Roboto,Oxygen,Ubuntu,Cantarell,'Fira Sans','Droid Sans',sans-serif;
    font-weight: 400;
    color: #141414;
    word-wrap: break-word;
}
.con {
	width: 350px;
	height: 250px;
	margin: 0 auto;
}
.block-container {
	color: #141414;
	background:#fefefe;
	border-width: 1px;
	border-style: solid;
	border-top-color:#dfdfdf;
	border-right-color:#d8d8d8;
	border-bottom-color:#cbcbcb;
	border-left-color:#d8d8d8;
	border-radius: 4px;
	margin: 0 auto;
	/*прижать контент к низу блока css*/
	/*position:absolute;
	bottom:0;*/
}
.block-footer {
	padding: 6px 10px;
	font-size: 12px;
	color: #505050;
	background: #f5f5f5;
	border-top: 1px solid#dfdfdf;
	background: linear-gradient(180deg,#f5f5f5,#fafafa);
}
* {
    box-sizing: border-box;
}
p, h3 {
	padding: 0px 10px 0px 10px;
}
</style>
<title>Мотивация №<?= $mResult['numQuotes'] ?></title>
<div class="con">
	<div class="block-container">
		<h3 class="block-minorHeader">Мотивация №<?= $mResult['numQuotes'] ?></h3>
		<div class="block-body" bis_skin_checked="1">
			<div class="block-row block-row--minor" bis_skin_checked="1">
				<p><?= $mResult['author'] ?></p>
				<p><?= $mResult['quote'] ?></p>
			</div>
		</div>
		<div class="block-footer" bis_skin_checked="1">
			<span class="block-footer-counter">Цитат в базе: <?= $mResult['countQuotes'] ?> (Обновление: <?= $iUpDate ?> сек.)</span>
		</div>
	</div>
</div>

	