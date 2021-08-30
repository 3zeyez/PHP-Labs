<?php
/*-------------------- first solution ------------------------
function add_commas_and_underscore($nb) {
  $string = strval($nb);  // convert the number into a string
  // start with the right 3 digits of the number
  $new_string = "_" . substr($string, strlen($string) - 3); 
  // interate the string in a reverse sens with step equal to -3
  for ($i = strlen($string) - 3; $i > 0; $i -= 3) {
    if ($i - 3 >= 0) {
      $new_string = "," . substr($string, $i - 3, 3) . $new_string;
    } else {
      $new_string = "," . substr($string, 0, $i) . $new_string;
    }
  }
  return substr($new_string, 1);
} ------------------------------------------------------------*/

// -------------------- second solution ------------------------
function add_commas_and_underscore($nb) {
  return number_format($nb, 3, '_', ',');
}  // ----------------------------------------------------------

// test cases
echo add_commas_and_underscore(120) . "\n";  // 120
echo add_commas_and_underscore(1097) . "\n";  // 1_097
echo add_commas_and_underscore(12051) . "\n";  // 12_051
echo add_commas_and_underscore(510987) . "\n";  // 510_987
echo add_commas_and_underscore(3536132) . "\n";  // 3,536_132
echo add_commas_and_underscore(57892357) . "\n";  // 57,892_357
echo add_commas_and_underscore(124562353) . "\n";  // 124,562_353
echo add_commas_and_underscore(12069057014032) . "\n";  // 12,069,057,014_032
?>
