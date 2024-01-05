<?php
/*
 * @lc app=leetcode id=1 lang=php
 *
 * [1] Two Sum
 */

// @lc code=start
class Solution
{

    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer[]
     */
    function twoSum($nums, $target)
    {
        $map = [];
        foreach ($nums as $key => $value) {
            $map[$value] = $key;
        }
        foreach ($nums as $key => $value) {
            $diff = $target - $value;
            if (array_key_exists($diff, $map) && $map[$diff] != $key) {
                return [$key, $map[$diff]];
            }
        }
        return null;
    }
}
// @lc code=end
