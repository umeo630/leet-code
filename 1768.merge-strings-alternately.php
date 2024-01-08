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
        $len1 = strlen($word1);
        $len2 = strlen($word2);
        $result = '';
        for ($i = 0; $i < max($len1, $len2); $i++) {
            if ($i < $len1) $result .= $word1[$i];
            if ($i < $len2) $result .= $word2[$i];
        }
        return $result;
    }
}
// @lc code=end
