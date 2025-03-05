A.<?php

$itemName = "Bluetooth Mouse";
$price = 12;
$taxRate = 0.08;

$totalPrice = $price + ($price * $taxRate);

echo "Thank you for purchasing the $itemName! Your total is $" . number_format($totalPrice, 2) . ".";
?>



B
<?php
$username = "ayans";
$postCaption = "Check out this amazing sunset!";

echo "@$username just posted: \"$postCaption\". Check it out now!";
?>

C
<?php

$userName = "kamran";
$companyName = "techcorp";

$emailAddress = $userName . "@" . $companyName . ".com";


echo $emailAddress;
?>


D
<?php
$userName = readline("Enter your name: ");
$stepCount = (int)readline("Enter number of steps walked: ");
$stepLengthMeters = (float)readline("Enter your average step length in meters (default is 0.8): ");


if ($stepLengthMeters <= 0) {
    $stepLengthMeters = 0.8;
}

$totalDistanceMeters = $stepCount * $stepLengthMeters;
$totalDistanceKm = $totalDistanceMeters / 1000;


echo "$userName has walked " . number_format($totalDistanceKm, 2) . " kilometers today!";
?>

E.
<?php
// Variables for movie and ratings (as provided)
$movieName = "The Matrix";
$rating1 = 10;
$rating2 = 5;
$rating3 = 10;
$rating4 = 8;
$rating5 = 9;


$averageRating = ($rating1 + $rating2 + $rating3 + $rating4 + $rating5) / 5;

echo "The movie \"$movieName\" has an average rating of " . number_format($averageRating, 1) . " stars.";
?>