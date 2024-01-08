/*
 * @lc app=leetcode id=9 lang=typescript
 *
 * [9] Palindrome Number
 */

// @lc code=start
function isPalindrome(x: number): boolean {
  const str = String(x);
  const str_reverse = [...str].reverse().join("");
  return str === str_reverse;
}
// @lc code=end
