<?php

$fruits = ['apple', 'orange', 'pear'];

function h1($text)
{
  echo "<h1>$text</h1>";
}

//Get length
h1(count($fruits));

//search array
var_dump(in_array('apple', $fruits));

//Add to array
$fruits[] = 'grape';
array_push($fruits, 'strawberry');
array_unshift($fruits, 'mango');

//Remove from array
//remove last element
// h1(array_pop($fruits));

//remove any element
// unset($fruits[2]);

// print_r($fruits);

$arr1 = [1, 2, 3];
$arr2 = [4, 5, 6];

$arr3 = array_merge($arr1, $arr2);

$arr4 = [...$arr2, ...$arr1];

// print_r($arr3);

//object from array

$keys = ['green', 'red', 'yellow'];
$values = ['avocado', 'apple', 'banana'];

$c = array_combine($keys, $values);

// print_r($c);

$k = array_keys($c);
$v = array_values($c);
// print_r($v);

//keys become values and values become keys
$flipped = array_flip($c);
// print_r($c);

$numbers = range(1, 20, 1);
// print_r($numbers);

$new_numbers = array_map(fn ($number) => "Number ${number}", $numbers);
// print_r($new_numbers);

$filtered = array_filter($numbers, fn ($number) => $number <= 10);
// print_r($filtered);

$sum = array_reduce($numbers, fn ($carry, $num) => $carry += $num);

h1("Sum: $sum");
