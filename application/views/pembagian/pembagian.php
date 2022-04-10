<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pembagian</title>
</head>

<body>
    <h1>Pembagian</h1>
    <form action="<?php base_url('pembagian') ?>" method="post">
        <table>
            <tr>
                <td><label>Nilai A</label></td>
                <td><input type="number" name="nilaia" value="<?php $a ?>"></td>
            </tr>
            <tr>
                <td><label>Nilai B</label></td>
                <td><input type="number" name="nilaib" value="<?php $b ?>"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="submit" value="Hitung"></td>
            </tr>
            <tr>
                <td><label>Hasil</label></td>
                <td><input type="number" name="hasil" disabled="" value="<?php echo $c ?>"></td>
            </tr>
        </table>
    </form>



</body>

</html>