<?php
function status($a, $b, $c) {
  if (gettype($a) === "string" and gettype($b) === "integer" and gettype($c) === "boolean") {
    if ($c) {
      echo "Hello $a, Age Is $b, Available For Hire";
    } else {
      echo "Hello $a, Age Is $b, Not Available For Hire";
    }
  } elseif (gettype($a) === "string" and gettype($b) === "boolean" and gettype($c) === "integer") {
    if ($b) {
      echo "Hello $a, Age Is $c, Available For Hire";
    } else {
      echo "Hello $a, Age Is $c, Not Available For Hire";
    }
  } elseif (gettype($a) === "integer" and gettype($b) === "boolean" and gettype($c) === "string") {
    if ($b) {
      echo "Hello $c, Age Is $a, Available For Hire";
    } else {
      echo "Hello $c, Age Is $a, Not Available For Hire";
    }
  } elseif (gettype($a) === "integer" and gettype($b) === "string" and gettype($c) === "boolean") {
    if ($c) {
      echo "Hello $b, Age Is $a, Available For Hire";
    } else {
      echo "Hello $b, Age Is $a, Not Available For Hire";
    }
  } elseif (gettype($a) === "boolean" and gettype($b) === "string" and gettype($c) === "integer") {
    if ($a) {
      echo "Hello $b, Age Is $c, Available For Hire";
    } else {
      echo "Hello $b, Age Is $c, Not Available For Hire";
    }
  } elseif (gettype($a) === "boolean" and gettype($b) === "integer" and gettype($c) === "string") {
    if ($a) {
      echo "Hello $c, Age Is $b, Available For Hire";
    } else {
      echo "Hello $c, Age Is $b, Not Available For Hire";
    }
  }
}

// Tests And Results
status("Osama", 38, true); // "Hello Osama, Age Is 38, Available For Hire"
echo "\n";
status(38, "Osama", true); // "Hello Osama, Age Is 38, Available For Hire"
echo "\n";
status(true, 38, "Osama"); // "Hello Osama, Age Is 38, Available For Hire"
echo "\n";
status(false, "Osama", 38); // "Hello Osama, Age Is 38, Not Available For Hire"
?>
