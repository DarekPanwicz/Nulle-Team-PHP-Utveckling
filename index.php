<?php
declare(strict_types=1);
system('clear');

// Required files.
require_once 'Newspaper.php';


// Creating new obcject of class Newspaper.
$weeklyMonthly = new Newspaper();

$weeklyMonthly->setName("Wiadomości Rolnicze Polska");
echo "Name of the newspaper is: " . $weeklyMonthly->getName() . PHP_EOL;

$weeklyMonthly->setNumberOfPages(24);
echo "Newspaper will have: " . $weeklyMonthly->getNumberOfPages() . " pages.". PHP_EOL;

$weeklyMonthly->setNumberOfCopies(10000);
echo "We will print: " . $weeklyMonthly->getNumberOfCopies() . " issues." . PHP_EOL;

echo $weeklyMonthly->getIsColor() . PHP_EOL;
$weeklyMonthly->toggleColor();
echo $weeklyMonthly->getIsColor() . PHP_EOL;
