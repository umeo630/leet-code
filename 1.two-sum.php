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
            $diff = $target - $value;
            if (array_key_exists($diff, $map)) {
                return [$key, $map[$diff]];
            }
            $map[$value] = $key;
        }
        return null;
    }
}
// @lc code=end
