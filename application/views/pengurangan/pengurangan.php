<?php
	
?>
<!DOCTYPE html>
<html>
<head>
	<title>Pengurangan</title>
</head>
<body>
	<center>
		<h1>Pengurangan</h1>
		<form action="<?=base_url('pengurangan')?>" method="post">
			<table>
				<tr>
					<td><label>Nilai A</label></td>
					<td><input type="number" name="input_a" value="<?=$a?>"></td>
				</tr>
				<tr>
					<td><label>Nilai B</label></td>
					<td><input type="number" name="input_b" value="<?=$b?>"></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" name="submit" value="Hitung"></td>
				</tr>
		</form> 
				<tr>
					<td><label>Hasil</label></td>
					<td><input type="number" name="hasil" disabled="" value="<?=$c?>"></td>
				</tr>
		<form>
			
		</form>
		</table>
	</center>
	
</body>
</html>