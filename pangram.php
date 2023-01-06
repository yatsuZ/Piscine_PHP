<?php
    function isPangram(string $str): bool
    {
        $regex = "/(?=.*a)(?=.*b)(?=.*c)(?=.*d)(?=.*e)(?=.*f)(?=.*g)(?=.*h)(?=.*i)(?=.*j)(?=.*k)(?=.*l)(?=.*m)(?=.*n)(?=.*o)(?=.*p)(?=.*q)(?=.*r)(?=.*s)(?=.*t)(?=.*u)(?=.*v)(?=.*w)(?=.*x)(?=.*y)(?=.*z)./i";
        return preg_match($regex, $str);
    }
    // $str = "the quick brown fox jumps over the lazy dog";
    // echo isPangram($str);
?>