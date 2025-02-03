<?php
$result = '';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $num1 = isset($_POST['num1']) ? $_POST['num1'] : '';
    $num2 = isset($_POST['num2']) ? $_POST['num2'] : '';
    $operation = isset($_POST['operation']) ? $_POST['operation'] : '';

    if (is_numeric($num1) && is_numeric($num2)) {
        switch ($operation) {
            case 'add':
                $result = $num1 + $num2;
                break;
            case 'subtract':
                $result = $num1 - $num2;
                break;
            case 'multiply':
                $result  = $num1 * $num2;
                break;
            case 'divide':
                if ($num2 == 0) {
                    $result = 'Error: tidak bisa membagi dengan nol';
                } else {
                    $result = $num1 / $num2;
                }
                break;
            default:
                $result = 'Silahkan pilih operasi yang valid';
        }
    } else {
        $result = 'Silahkan masukkan angka yang valid';
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulator Sederhana</title>
</head>

<body>
    <h2>Kalkulator Sederhana</h2>
    <form action="" method="post">
        <input type="text" name="num1" placeholder="Masukkan angka pertama" required>
        <select name="operation">
            <option value="add">+</option>
            <option value="subtract">-</option>
            <option value="multipy">*</option>
            <option value="divide">/</option>
        </select>
        <input type="text" name="num2" placeholder="Masukkan angka kedua" required>
        <button type="submit">Hitung</button>
    </form>
    <h3>Hasil: <?php echo $result; ?></h3>
</body>

</html>