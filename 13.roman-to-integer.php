<?php
/*
 * @lc app=leetcode id=13 lang=php
 *
 * [13] Roman to Integer
 */

// @lc code=start
class Solution
{
    /**
     * @param String $s
     * @return Integer
     */
    function romanToInt($s)
    {
        $romanToIntMap = [
            'I' => 1,
            'V' => 5,
            'X' => 10,
            'L' => 50,
            'C' => 100,
            'D' => 500,
            'M' => 1000,
        ];
        $input = str_split($s);
        $sum = 0;
        foreach ($input as $k => $v) {
            $current = $romanToIntMap[$v];
            $next = $romanToIntMap[$input[$k + 1]];
            if ($current < $next) {
                $sum -= $current;
                continue;
            }
            $sum += $current;
        }
        return $sum;
    }
}
// @lc code=end
