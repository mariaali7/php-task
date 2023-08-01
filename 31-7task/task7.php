
 <?php
 $chars = '1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz';
 
 function generatePassword($length) {
     global $chars;
   
     $shuffled_chars = str_shuffle($chars);
   
     $password = substr($shuffled_chars, 0, $length);
   
     return $password;
 }
 
 echo generatePassword(7);
 
 echo generatePassword(12); 
 ?>