<?php

// Task 1
function increaseSalary($salary) {
    return $salary * 1.1;
}

function increaseSalaryRef(&$salary) {
    $salary *= 1.2;
}

// Task 2
$square = fn($number) => $number ** 2;

// Task 3
function divide(float $a, float $b): float {
    if ($b == 0) {
        return 0.0; // Prevents division by zero
    }
    return $a / $b;
}

// Task 4
function mergeArrays(array $array1, array $array2): array {
    return [...$array1, ...$array2];
}

// Task 5
function greet(string $name, string $title = "Mr./Ms.", string $punctuation = "!") {
    return "Hello, $title $name$punctuation";
}

