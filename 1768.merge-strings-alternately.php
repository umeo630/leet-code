<?php
/*
 * @lc app=leetcode id=1768 lang=php
 *
 * [1768] Merge Strings Alternately
 */

// @lc code=start
class Solution
{

    /**
     * @param String $word1
     * @param String $word2
     * @return String
     */
    function mergeAlternately($word1, $word2)
    {
        $arr1 = str_split($word1);
        $arr2 = str_split($word2);
        $result = '';
        for ($i = 0; $i < max(count($arr1), count($arr2)); $i++) {
            if ($i < count($arr1)) $result .= $arr1[$i];
            if ($i < count($arr2)) $result .= $arr2[$i];
        }
        return $result;
    }
}
// @lc code=end
