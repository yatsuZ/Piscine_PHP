<?php
    // function clonenoespace(string $mot, string $sep): string
    // {
    //     $newmot = "";
    //     for ($i = 0; $i < strlen($mot); $i++)
    //     {
    //         if ($mot[$i] != $sep)
    //             $newmot = $newmot . $mot[$i];
    //     }
    //     return $newmot;
    // }

    // function split_seperatuer(string $s, string $sep): array
    // {
    //     $tab = array();
    //     $str = "";
    //     for ($i = 0; $i < strlen($s); $i++)
    //     {
    //         if ($s[$i] == $sep and $str != "")
    //         {
    //             array_push($tab, clonenoespace($str, $sep));
    //             // echo "Mot = ". $str . "\n";
    //             $str = "";
    //         }
    //         else if ($s[0] != $sep)
    //             $str = $str . $s[$i];
    //     }
    //     if ($str != "")
    //         array_push($tab, $str);
    //     return ($tab);
    // }

    function newstrDF(string $s, int $d , int $f)
    {
        $newstr = "";
        for (; $d < $f; $d++)
            $newstr = $newstr  . $s[$d];
        return $newstr;
    }

    function breakLines(string $s, int $le): string
    {
        $d = 0;
        $f = 0;
        $max = FALSE;
        $newstr = "";
        while ($f < strlen($s))
        {
            $f += 1;
            if ($f - $d > $le)
            {
                if ($s[$f] == " " or ($f + 1 < strlen($s) and $s[$f + 1] == " "))
                {
                    $newstr = $newstr . newstrDF($s, $d, $f) . "\n";
                }
                else
                {
                    while ($s[$f] != " ")
                        $f--;
                    $newstr = $newstr . newstrDF($s, $d, $f) . "\n";
                }
                $d = $f + 1;
            }
        }
        $newstr = $newstr . newstrDF($s, $d, $f);
        return $newstr;
    } 

    // echo breakLines('Line with words', 15);
    // echo breakLines('Line with words should break', 15);
    // echo breakLines("Line with words should break at this spot", 15);
    // echo breakLines("1234 789A CDEFG IJKLMN OPQRS UV WXYZ ----", 15);
    // echo breakLines('Title is long
    // Line with words break', 12);
?>