<?php
  // split words into an array of words
	function split_words_of($string) {
	  $string .= " ";  // add an extra space to reach the last word
	  $words = [];  // initialization of the array of words
	  $word = "";  // initialization of the first word
	  for ($i = 0; $i < strlen($string); $i++) {  // go through the string to split it
	    if ($string[$i] !== " ") {  // if it's not a space 
	      $word .= $string[$i];  // we concatenate the word
	    } else {  // when we face a space, we have a whole word
	      array_push($words, $word);  // add the word to the array of words
	      $word = "";  // reinitialization of the next word
	    }
	  }
	  return $words;
	}
	
	// check if an element is in an array
	function check_in($array, $element) {
	  if (count($array) === 0) {
	    return False;  // the array has no element
	  } else {
  	  $counter = 0;  // initialization of the counter
  	  $in = False;  // we consider the array hasn't this element
  	  while ((!$in) and ($counter <= count($array) - 1)) {
  	    if ($array[$counter] === $element) {
  	      $in = True;
  	    }
  	    $counter++; 
  	  }
  	  return $in;
	  }
	}
	
	// remove duplicate words frome an array of words
	function remove_duplicate_words_from($array) {
	  $array_with_out_duplicate_words = [];
	  for ($i = 0; $i < count($array); $i++) {
	    if (!check_in($array_with_out_duplicate_words, $array[$i])) {
	      array_push($array_with_out_duplicate_words, $array[$i]);
	    }
	  }
	  return $array_with_out_duplicate_words;
	}
  
  // join the array of words without duplicate words to a String
  function join_array_to_string($words_without_duplicate) {  
    $string = "";
      for ($i = 0; $i < count($words_without_duplicate); $i++) {
        $string .= $words_without_duplicate[$i] . " ";
      }
      echo $string;
  }
  
  // here initialize the string 
  $string = "Hello Elzero Web Web Hello School";
  // here split the string to an array of words
  $words = split_words_of("Hello Elzero Web Web Hello School");
  // here delete any recurrence of a duplicate word from the array
  $words_without_duplicate = remove_duplicate_words_from($words);
  // call the main funciton 
  join_array_to_string($words_without_duplicate);
?>
