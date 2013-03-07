<?php

$input[0]['nimi'] = "Kalle";
$input[0]['vanus'] = "15";
$input[0]['sugu'] = "Mees";
$input[0]['rühm'] = "AA10";
$input[1]['nimi'] = "Malle";
$input[1]['vanus'] = "16";
$input[1]['sugu'] = "Naine";
$input[1]['rühm'] = "BB11";
$input[2]['nimi'] = "Palle";
$input[2]['vanus'] = "17";
$input[2]['sugu'] = "Mees";
$input[2]['rühm'] = "CC12";
$input[3]['nimi'] = "Valle";
$input[3]['vanus'] = "18";
$input[3]['sugu'] = "Mees";
$input[3]['rühm'] = "DD13";
$cols = 5;


?>

<table border="1">
	<tr>
		<td></td>
		<td>0</td>
		<td>1</td>
		<td>2</td>
		<td>3</td>
	</tr>

	<?foreach ($input[0] as $atr => $foo): ?>
	<tr>
		<td><?=utf8_decode($atr)?></td>
		<?foreach ($input as $isik): ?>
		<td><?=utf8_decode($isik[$atr])?></td>
		<? endforeach ?>

	</tr>
	<? endforeach ?>


</table>
