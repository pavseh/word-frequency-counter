<?php 

// Calculate the total price of items in a shopping cart
function getTotalPrice(array $items): int {
    $total = 0;
    foreach ($items as $item) {
        $total += $item['price'];
    }
    return $total;
}


// Check if a number is even or odd
function isEven (int $number): bool {
    return ($number % 2 == 0);
}

 

// List of Items
$items = [
    ['name' => 'Widget A', 'price' => 10],
    ['name' => 'Widget B', 'price' => 15],
    ['name' => 'Widget C', 'price' => 20],
];

// Print total price
$totalPrice = getTotalPrice($items);
echo "Total price: $" . $totalPrice . "\n";

// 

// Perform a series of string manipulations

$oldString = "This is a poorly written program with little structure and readability.";

// Remove spaces and convert to lowercase
function modifyString(string $string): string {
    $string = str_replace('', ' ', $string);
    $string = strtolower($string);
    return $string;
}


$newString = modifyString($oldString);
echo "Modified stirng: " . $newString . "\n";



// Even or Odd
$number = 42;

if (isEven($number)) {
    echo "The number " . $number . " is even.\n";
} else {
    echo "The number " . $number . " is odd.\n";
}

?>