<?php
function p($text)
{
  echo "<p>$text</p>";
}

$string = "buenastardes manolo";

p(strpos($string, "as"));
p(strrpos($string, "as"));
p(strtoupper($string));
p(strtolower($string));
p(ucwords($string));
p(str_replace('manolo', 'juan', $string));

p(substr($string, 5));
p(substr($string, 5, 10));

if (str_starts_with($string, 'buen')) {
  p("SI");
}
if (str_ends_with($string, 'lo')) {
  p("SI");
}

$string2 = '<h1>Buenas</h1>';
echo htmlspecialchars($string2);
