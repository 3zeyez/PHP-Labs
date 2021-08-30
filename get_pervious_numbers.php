<?php
/* ------------------first solution---------------------
function getPreviousNumbers($nb) {
  if ($nb <= 0) {
  
    echo "Negative Numbers & Zero Not Allowed"  . "\n";
    
  } elseif ($nb > 10) {
    if ($nb % 2 == 0) {
    
      for ($i = $nb; $i > 0; $i -= 2) {
        echo $i;
      }
      echo "\n";
      
    } else {
    
      echo $nb;
      for ($i = $nb - 1; $i > 0; $i -= 2) {
        echo $i;
      }
      echo "\n";
    } 
    
  } else {
  
    for ($i = $nb; $i > 0; $i--) {
      echo $i;
    }
    echo "\n";
    
  }
} -----------------------------------------------------*/

// -----------------second solution---------------------
function getPreviousNumbers($nb) {
  if ($nb <= 0) {
    
    echo "Negative Numbers & Zero Not Allowed"  . "\n";
    
  } elseif ($nb > 10 and $nb % 2 == 0) {
    
    for ($i = $nb; $i > 0; $i -= 2) {
      echo $i;
    }
    echo "\n";
    
  } elseif ($nb > 10 and $nb % 2 == 1) {
    
    echo $nb;
    for ($i = $nb - 1; $i > 0; $i -= 2) {
      echo $i;
    }
    echo "\n";
    
  } else {
    
    for ($i = $nb; $i > 0; $i--) {
      echo $i;
    }
    echo "\n";
  }
  
}  // -------------------------------------------------

// test cases 
getPreviousNumbers(0); // "Negative Numbers & Zero Not Allowed"
getPreviousNumbers(-20); // "Negative Numbers & Zero Not Allowed"
getPreviousNumbers(10); // 10987654321
getPreviousNumbers(17); // 17161412108642
?>
