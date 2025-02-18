<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practice 02 BUALA</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

    <?php
    $fruit_list = array("orange","banana","grape","cherry","strawberry");

    echo "<h3>My Top 5 Fruits</h3>";
    // Output
    echo "<ol>";
    for ($a = 0; $a < count($fruit_list); $a++) {
        echo"<li>".$fruit_list[$a]."</li>";
    }
    echo "</ol>";
    ?>

</body>
</html>

