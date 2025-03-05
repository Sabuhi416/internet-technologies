1.<?php

$height = 5;


for ($i = 1; $i <= $height; $i++) {
   
   for ($j = 1; $j <= $height - $i; $j++) {
       echo " ";
   }
   
   
   for ($k = 1; $k <= 2 * $i - 1; $k++) {
       echo "*";
   }
   
   echo "\n";
}
?>

2.
<?php

$colors = ["#FFD1DC", "#CAFFBF", "#9BF6FF", "#FFC6FF", "#FDFFB6"];


for ($i = 1; $i <= 5; $i++) {
   
    echo "<div style='background-color: {$colors[$i-1]}; padding: 10px; margin: 10px; border-radius: 5px; width: 200px; display: inline-block;'>";
    
    
    echo "<h3>Table of $i</h3>";
    
   
    for ($j = 1; $j <= 10; $j++) {
        $result = $i * $j;
        echo "$i × $j = $result <br>";
    }
    
   
    echo "</div>";
}
?>

3.
<?php
for ($i = 1; $i <= 10; $i++) {
        if ($i % 2 == 0) {
               echo "<div style='background-color: pink; padding: 10px; margin: 5px; display: inline-block; width: 50px; text-align: center; border-radius: 5px;'>$i</div>";
    } else {
       
        echo "<div style='background-color: lightgreen; padding: 10px; margin: 5px; display: inline-block; width: 50px; text-align: center; border-radius: 5px;'>$i</div>";
    }
}
?>

4.
<?php

echo "<table border='1' style='border-collapse: collapse; width: 50%; margin: 20px;'>";
echo "<thead style='background-color: #f2f2f2;'>";
echo "<tr>";
echo "<th style='padding: 8px;'>Number</th>";
echo "<th style='padding: 8px;'>Square</th>";
echo "<th style='padding: 8px;'>Cube</th>";
echo "</tr>";
echo "</thead>";
echo "<tbody>";


for ($i = 1; $i <= 10; $i++) {
  
   $square = $i * $i;
   $cube = $i * $i * $i;
   
  
   $rowColor = ($i % 2 == 0) ? '#ffffff' : '#f9f9f9';
   
  
   echo "<tr style='background-color: $rowColor;'>";
   echo "<td style='padding: 8px; text-align: center;'>$i</td>";
   echo "<td style='padding: 8px; text-align: center;'>$square</td>";
   echo "<td style='padding: 8px; text-align: center;'>$cube</td>";
   echo "</tr>";
}


echo "</tbody>";
echo "</table>";
?>

5.
<?php
$days = ["Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday"];

echo "<ol>";
foreach ($days as $day) {
    // Check if the day is Saturday or Sunday
    if ($day === "Saturday" || $day === "Sunday") {
        // Apply a different background color for weekends
        echo "<li style='background-color: #f0e68c;'>$day</li>";
    } else {
        echo "<li>$day</li>";
    }
}
echo "</ol>";
?>

6.
<?php
$students = [
  ["Alice", 85],
  ["Bob", 45],
  ["Charlie", 78],
  ["David", 59],
  ["Emma", 92],
  ["Frank", 60],
];

echo "<ul>";
foreach ($students as $student) {
    list($name, $score) = $student;
    $result = $score >= 60 ? "Passed" : "Failed";
    echo "<li>$name: $score - $result</li>";
}
echo "</ul>";
?>

7.
<?php
$employees = [
  ["Alice", 2700],
  ["Bob", 4500],
  ["Charlie", 780],
  ["David", 5190],
  ["Emma", 1192],
  ["Frank", 3460],
];

echo "<ul>";
foreach ($employees as $employee) {
    list($name, $salary) = $employee;
    // Determine bonus percentage based on the salary
    $bonusPercentage = ($salary >= 3000) ? 0.10 : 0.05;
    $bonus = $salary * $bonusPercentage;
    $totalSalary = $salary + $bonus;
    
    // Format the numbers to 2 decimal places for a cleaner output
    $formattedSalary = number_format($salary, 2);
    $formattedBonus = number_format($bonus, 2);
    $formattedTotal = number_format($totalSalary, 2);
    
    echo "<li>$name: Base Salary \$$formattedSalary, Bonus \$$formattedBonus, Total Salary \$$formattedTotal</li>";
}
echo "</ul>";
?>
