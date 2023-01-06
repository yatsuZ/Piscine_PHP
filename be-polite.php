<?php
$hours = date('H');
if ($hours > 6 and $hours <= 12)
{
    echo "Hello! Have a nice day :)";
}elseif ($hours > 12 and $hours <= 18)
{
    echo "Have a good afternoon!";
}elseif ($hours > 18 and $hours <= 21)
{
    echo "Good evening! Hope you had a good day!";
}else
{
    echo "Good night! See you tomorrow :)";
}
?>