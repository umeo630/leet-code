/*
 * @lc app=leetcode id=1768 lang=typescript
 *
 * [1768] Merge Strings Alternately
 */

// @lc code=start
function mergeAlternately(word1: string, word2: string): string {
  const len1 = word1.length;
  const len2 = word2.length;
  let result = "";
  for (let index = 0; index < Math.max(len1, len2); index++) {
    if (index < len1) result += word1.charAt(index);
    if (index < len2) result += word2.charAt(index);
  }
  return result;
}
// @lc code=end
