<?php

$original_sentence = 'That new trainee is so genius.';


$new_word = 'Our';


$new_sentence = str_replace(explode(' ', $original_sentence)[0], $new_word, $original_sentence);

echo $new_sentence; 
?>



