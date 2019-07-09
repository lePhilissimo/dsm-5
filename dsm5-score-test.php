<?php
require 'dsm5.php';

header('Content-Type: application/json');

$test = new Dsm5();

echo ''. $test->ScoreTest((file_get_contents('php://input'))) .'';
?>
