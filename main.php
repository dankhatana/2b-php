<?php

// Function to calculate integer radius of circle
function calculate_radius($diameter) {
    $radius = $diameter / 2;
    return intval($radius);
}

// Function to calculate integer area of circle
function calculate_area($diameter) {
    $radius = calculate_radius($diameter);
    $area = M_PI * pow($radius, 2);
    return intval($area);
}

// Function to calculate integer circumference of circle
function calculate_circumference($diameter) {
    $circumference = M_PI * $diameter;
    return intval($circumference);
}

while (true) {
    $diameter = intval(readline("Enter the diameter of the circle (or '0' to exit): "));
    
    // Exit the loop if user enters '0'
    if ($diameter === 0) {
        break;
    }

    // Call the functions to calculate integer radius, area, and circumference
    $radius = calculate_radius($diameter);
    $area = calculate_area($diameter);
    $circumference = calculate_circumference($diameter);

    // Print the results
    echo "Radius of the circle: " . $radius . PHP_EOL;
    echo "Area of the circle: " . $area . PHP_EOL;
    echo "Circumference of the circle: " . $circumference . PHP_EOL;
}

?>