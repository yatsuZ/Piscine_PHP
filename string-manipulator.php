<?php
    function capsMe(string $s): string
    {
        return strtoupper($s);
    }
    function lowerMe(string $s): string
    {
        return strtolower($s);
    }
    function upperCaseFirst(string $s): string
    {
        $news = capsMe($s[0]);
        for ($i = 1; $i < strlen($s); $i++)
        {
            if ($s[$i - 1] == " ")
                $news = $news . capsMe($s[$i]);
            else 
                $news = $news . $s[$i];
        }
        return ($news);
    }
    function lowerCaseFirst(string $s): string
    {
        $news = lowerMe($s[0]);
        for ($i = 1; $i < strlen($s); $i++)
        {
            if ($s[$i - 1] == " ")
            {
                $news = $news . lowerMe($s[$i]);
            }
            else
            {
                $news = $news . $s[$i];
            }
        }
        return ($news);
    }
    function removeBlankSpace(string $s): string
    {
        return trim($s);
    }
    // $str = "Are you okey        ";
    // $str = capsMe($str);
    // echo $str;
    // $str = lowerMe($str);
    // echo $str;
    // $str = upperCaseFirst($str);
    // echo $str;
    // $str = lowerCaseFirst($str);
    // // echo $str;
    // $str = removeBlankSpace($str);
    // echo $str;
?>