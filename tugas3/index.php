<?php
include 'day.php';
include 'music.php';
include 'vanue.php';
include 'festival.php';

$festival = new festival;
$festival->bookingTicket();
echo "<br/>";
echo "Setelah berhasil membooking tiket, ";
$festival->mulaiNonton();
