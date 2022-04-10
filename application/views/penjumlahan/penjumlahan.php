<?php
    
?>
<!DOCTYPE html>
<html>
<head>
    <title>Penjumlahan</title>
</head>
<body>
    <h1>Penjumlahan</h1>
    <form action="<?php echo base_url("penjumlahan"); ?>" method="post">
        <label>Nilai A</label>
        <input type="number" name="a" value="<?=$a?>"><br>
        <label>Nilai B</label>
        <input type="number" name="b" value="<?=$b?>"><br>
        <input type="submit" name="submit" value="Hitung">
    </form>
    <form>
        <input type="number" name="hasil" disabled="" value="<?=$c?>">
    </form>
</body>
</html>