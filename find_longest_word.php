<?php
/* -----------------first solution-----------------------
function longest_word_in($sentence) {
  $sentence .= " ";
  $list_of_words = [];
  $word = "";
  
  for ($i = 0; $i < strlen($sentence); $i++) {
  
    if ($sentence[$i] !== " ") {
      $word .= $sentence[$i];
    } else {
      array_push($list_of_words, $word);
      $word = "";
    }
    
  }

  $longestWord = $list_of_words[0];
  
  for ($i = 1; $i < count($list_of_words); $i++) {
    if (strlen($longestWord) < strlen($list_of_words[$i])) {
      $longestWord = $list_of_words[$i];
    }
    
  }

  return $longestWord;
} -------------------------------------------------------*/

// -----------------second solution-----------------------
function longest_word_in($sentence) {
  $list_of_words = explode(" ", $sentence);
  
  $longestWord = "";
  foreach ($list_of_words as $word) :
    
    if (strlen($word) > strlen($longestWord)) {
      $longestWord = $word;
    }
  
  endforeach;
  
  return $longestWord;
} //-------------------------------------------------------

echo longest_word_in("In Programming We Love PHP Tooooooooooo Much")  // Tooooooooooo
?>
