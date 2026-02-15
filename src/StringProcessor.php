<?php

namespace IvanSorochinskiy\Hw3;

class StringProcessor
{
    public function toLower(string $str)
    {
        return strtolower($str);
    }
    public function toUpper(string $str)
    {
        return strtoupper($str);
    }
}
