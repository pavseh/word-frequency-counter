<?php

    // Rows & Columns (matrix)
    $matrix = [
        [12, 23, 34],
        [45, 55, 62],
        [71, 84, 90]
    ];
    
    $row = 0;
    while ($row < count($matrix)) {
        $column = 0;
        while ($column < count($matrix[$row])) {
            if ($matrix[$row][$column] % 2 == 0) {
                echo $matrix[$row][$column] . " ";
            }
            $column++;
        }
        $row++;
    }

?>