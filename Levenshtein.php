<?php
class Levenshtein
{

    /**
     * Calculate Levenshtein distance between two strings
     * return the smallest possible distance.*
     * @param string $str1
     * @param string $str2
     * @return int
     */
    public static function levenshtein_dis($str1, $str2): int
    {
        $matrix = [];
        $str1Array = str_split($str1);
        $str2Array = str_split($str2);
        $row = [];
        for ($j = 0; $j < count($str2Array); $j++) {
            $row[$j] = $j;
        }
        $matrix[0] = $row;
        for ($i = 0; $i < count($str1Array); $i++) {
            $row = [];
            $row[0] = $i + 1;
            for ($j = 0; $j < count($str2Array); $j++) {
                $row[$j + 1] = min(
                    $matrix[$i][$j + 1] + 1,
                    $row[$j] + 1,
                    $matrix[$i][$j] + ($str1Array[$i] === $str2Array[$j] ? 0 : 1)
                );
            }
            $matrix[$i + 1] = $row;
        }
        return $matrix[count($str1Array)][count($str2Array)];
    }
}
