<?php
    function reverse(string $s): string
    {
        $newstr = "";
        for ($i = 0; $i < strlen($s); $i++)
        {
            $newstr = $s[$i] . $newstr ;
        }
        return ($newstr);
    }
    function isPalindrome(string $s): bool
    {
        return ($s == reverse($s));
    }
?>