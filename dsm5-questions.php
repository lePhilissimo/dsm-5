<?php
require 'dsm5.php';

header('Content-Type: application/json');

$test = new Dsm5();

echo $test->GetQuestions();
?>
