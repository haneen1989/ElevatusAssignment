<?php
class Hamming
{
    /**
     * Calculate Hamming distance between two strings
     * @param string $str1
     * @param string $str2
     * @return int
     */
    public static function hamming_dis($str1, $str2): int
    {
        $diff = self::switchDiffBetweenString($str1, $str2);
        $str1Array = str_split($str1);
        $str2Array = str_split($str2);
        $count = 0;
        for ($i = 0; $i < count($str1Array); $i++) {
            $count = ($str1Array[$i] != $str2Array[$i]) ? $count + 1 : $count;
        }
        return $count + $diff;
    }

    /**
     * comparison between two strings and switch between them to make str1 have the less length and 
     * return the absolute difference.*
     * @param string $str1
     * @param string $str2
     * @return int
     */

    private static function switchDiffBetweenString(&$str1, &$str2): int
    {
        $string1=$str1;
        $string2=$str2;

        $diff = strlen($string1) - strlen($string2);
        if ($diff < 0) {
            $str1 = $string1;
            $str2 = $string2;
        } else {
            $str1 = $string2;
            $str2 = $string1;
        }
        return abs($diff);
    }
}
