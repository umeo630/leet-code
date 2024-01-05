/*
 * @lc app=leetcode id=1 lang=typescript
 *
 * [1] Two Sum
 */

// @lc code=start
function twoSum(nums: number[], target: number): number[] {
  let map: Map<number, number> = new Map<number, number>();
  for (let i = 0; i < nums.length; i++) {
    let diff: number = target - nums[i];
    if (map.has(diff)) {
      return [i, Number(map.get(diff))];
    }
    map.set(nums[i], i);
  }
  return [];
}
// @lc code=end
