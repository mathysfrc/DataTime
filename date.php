<?php

$presentTime = new DateTime;
echo $presentTime->format("M-d-Y-h:i:s A");

$destinationTime = new DateTime;
$interval = new DateInterval('P500D');

$destinationTime = clone $presentTime;
$destinationTime->add($interval);
echo $destinationTime->format("M-d-Y-h:i:s A");

$diff =  $presentTime->diff($destinationTime);
echo $diff->format("%Y-%M-%d-%h");

?>
