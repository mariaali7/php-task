<?php
function isLowerCase($str) {
    // Check if any character is not a lowercase letter
    for ($i = 0; $i < strlen($str); $i++) {
        if (!ctype_lower($str[$i])) {
            return false;
        }
    }

    return true;
}

$inputString = "remove";

if (isLowerCase($inputString)) {
    echo "Your String is Ok";
} else {
    echo "Your String contains uppercase characters";
}
?>