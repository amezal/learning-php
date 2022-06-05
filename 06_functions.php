<?php
$age = 21;

function hola()
{
  global $age;
  echo $age;
}

function registerUser($email)
{
  global $age;
  $newage = $age;
  echo "$email registered";
  echo $newage;
  $age = 15;

  hola();
}

registerUser('armando@gmail.com');

$sum = function ($n1 = 0, $n2 = 0) {
  return $n1 + $n2;
};

echo "<h1>{$sum(5, 5)}</h1>";

function subtract($n1, $n2)
{
  return $n1 - $n2;
}

echo '<h1>' . subtract(11, 5) . '</h1>';

$multiply = fn ($n1, $n2) => $n1 * $n2;

echo "<h1> {$multiply(7, 8)} </h1>";
