<?php

// for ($i = 0; $i < 10; $i++) {
//   echo "<h1>{$i}</h1>";
// }

// $x = 0;

// while ($x <= 15) {
//   echo "<h2 color='red'>Number $x</h2>";
//   $x++;
// }

$texts = ['Hola', 'Adios', 'Gracias', 'Por favor'];

foreach ($texts as $text) {
  echo "<h1>$text</h1>";
}

echo "<br/>";

foreach ($texts as $i => $text) {
  echo "<h1>$i:  $text</h1>";
}

echo "<br/>";

$person = [
  'first_name' => 'Armando',
  'last_name' => 'Meza',
  'email' => 'armando@gmail.com'
];

foreach ($person as $key => $value) {
  echo "<h1>$key: $value</h1>";
}
