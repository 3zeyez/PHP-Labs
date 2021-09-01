<?php
function print_friends_array($array) {
  foreach ($array as $element) {
    if ("A" <= $element[0] && $element <= "Z") {
      echo $element . "\n";
    }
  }
}

// test case
$myfriends = ["Ahmed", 20, 10, "Sayed", "Ali", "Shaimaa", "ibrahim", "Noha"];
print_friends_array($myfriends);
?>
