<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perkalian</title>
</head>

<body>
    <div>
        <h3>Perkalian</h3>
        <form action="<?= base_url(); ?>perkalian" method="post">
            <div>
                <label for="angka1">Angka 1</label>
                <input type="number" name="angka1" id="angka1" value="<?= $angka1; ?>">
            </div>
            <br>
            <div>
                <label for="angka1">Angka 2</label>
                <input type="number" name="angka2" id="angka2" value="<?= $angka2; ?>">
            </div>
            <br>
            <div style="align-items: right;">
                <input type="submit" value="Hitung" name="hitung">
            </div>
            <br>
            <div>
                <label for="hasil">Hasil</label>
                <input type="number" name="hasil" id="hasil" value="<?= $hasil; ?>">
            </div>
        </form>
    </div>
</body>

</html>