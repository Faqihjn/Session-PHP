<?php
    $usia = 12;
    
    $result = null;

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
        $x = $_POST['x'];
        $y = $_POST['y'];

        $result = sum($x, $y);
    }

    function sum($x, $y) {
        return $x + $y;
    }
?>

<html>
    <head>
        <title>Hello World</title>
    </head>
    <body>
        <?php if (!$result) { ?>
            <form action="sum.php" method="post"> 
                <input type="text" name="x" placeholder="Masukkan nilai pertama" />
                <input type="text" name="y" placeholder="Masukkan nilai kedua" /> 
                <input type="submit" name="submit" /> 
            </form>
        <?php } else { ?>
            <p>Hasilnya adalah <?= $result ?> </p>
        <?php } ?>
        
    </body>
</html>