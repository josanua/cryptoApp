<?php
require_once 'mvc/controller.php';



$saveButton = '';

$table = '<table>
			<tr>
				<th>Symbol</th>
				<th>Price $</th>
				<th>Buyed Price</th>
				<th>Buyed Volume</th>
				<th>Sold Volume</th>
				<th>Sold Price</th>
			</tr>
			<tr>
				<td class="symbol">'.$symbol.'</td>
				<td class="price"></td>
				<td class="">'.$buyedPrice.'</td>
				<td class="">'.$buyedVolume.'</td>
				<td class="">'.$soldVolume.'</td>
				<td class="">'.$soldPrice.'</td>
			</tr>
		</table>';
?>

