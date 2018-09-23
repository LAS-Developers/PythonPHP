<form method="post" action="PalindromeCheck.php">
    <input name = "Text" type="text" placeholder="Enter Some text...">
    <input type="submit" value="Check" onclick="">
</form>
<?php

$str = $_POST["Text"];
$str = strtolower($str);
$strrev = strrev($str);
if ($str == $strrev){echo "This is a Palindrome";}
else{echo "This is not a Palindrome";}

?>