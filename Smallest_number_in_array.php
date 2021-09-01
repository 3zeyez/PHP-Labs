<?php
function min_number($array) {
  $min_nb = $array[0];
  foreach ($array as $element):
    if (gettype($element) == "integer") {
      if ($element < $min_nb) {
        $min_nb = $element;
      }
    }
  endforeach;
  echo $min_nb;
}

// Input
$myarray = [115, 20, 10, "A", "!", "@", 13, 1, 5, 2, "X", "C"];
min_number($myarray);

// Output: 1
?>
