<?php
$x = 6;
$y = 4;

// Perform arithmetic operations
$sum_result = $x + $y;
$difference_result = $x - $y;
$product_result = $x * $y;
$division_result = $x / $y;

// Display the results
echo "Sum : " . $sum_result . "<br>";
echo "Difference : " . $difference_result . "<br>";
echo "Product : " . $product_result . "<br>";
echo "Division : " . $division_result . "<br>";
?>
<?php
// Using for loop to display numbers from 5 to 15
for ($i = 5; $i <= 15; $i++) {
    echo $i . " ";
}
?>
<?php
function calculateElectricityBill($units) {
    if ($units <= 50) {
        $bill = $units * 3.50;
    } elseif ($units <= 100) {
        $bill = 50 * 3.50 + ($units - 50) * 4.00;
    } elseif ($units <= 150) {
        $bill = 50 * 3.50 + 50 * 4.00 + ($units - 100) * 5.20;
    } else {
        $bill = 50 * 3.50 + 50 * 4.00 + 50 * 5.20 + ($units - 150) * 6.50;
    }

    return $bill;
}

// Example usage
$unitsConsumed = 125;
$electricityBill = calculateElectricityBill($unitsConsumed);
echo "Electricity Bill for $unitsConsumed units: Rs. " . number_format($electricityBill, 2);
?>
