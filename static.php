<?php
function increase()
{
    static $number = 0;
    $number++;
    return $number;
}
echo increase();
echo increase();
