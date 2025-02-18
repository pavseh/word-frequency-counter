<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practice 01 BUALA</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <h1>Practice 01</h1>

    <form method="POST">
        <label for="side1">Side 1:</label>
        <input type="number" step="any" name="side1" required><br><br>
        <label for="side2">Side 2:</label>
        <input type="number" step="any" name="side2" required><br><br>
        <label for="side3">Side 3:</label>
        <input type="number" step="any" name="side3" required><br><br>
        <input type="submit" value="Calculate Area">
    </form>

    <!-- Php part -->
    <?php
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $side1 = $_POST["side1"];
        $side2 = $_POST["side2"];
        $side3 = $_POST["side3"];

        # formula from the Practice 01 instructions:
        $s = ($side1 + $side2 + $side3) / 2;
        $areaSquared = $s * ($s - $side1) * ($s - $side2) * ($s - $side3);
        echo "<h2>The area of the triangle is: <b>" . number_format($areaSquared ** (1/2), 2) . "</b></h2>";
    }
    ?>
</body>
</html>