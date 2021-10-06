<?php
require_once 'Hamming.php';
require_once 'Levenshtein.php';

// Driver Code
$str1 = "march";
$str2 = "cart";

// function call
echo nl2br("The Hamming distance between ".$str1." and ".$str2." is :".Hamming::hamming_dis($str1, $str2)."\r\n");
echo nl2br("The Levenshtein distance between ".$str1." and ".$str2." is :".Levenshtein::levenshtein_dis($str1, $str2)."\r\n");



// Driver Code
$str1 = "cat";
$str2 = "cast";

// function call
echo nl2br("The Hamming distance between ".$str1." and ".$str2." is :".Hamming::hamming_dis($str1, $str2)."\r\n");
echo nl2br("The Levenshtein distance between ".$str1." and ".$str2." is :".Levenshtein::levenshtein_dis($str1, $str2)."\r\n");


