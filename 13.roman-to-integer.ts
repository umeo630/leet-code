/*
 * @lc app=leetcode id=13 lang=typescript
 *
 * [13] Roman to Integer
 */

// @lc code=start
function romanToInt(s: string): number {
  const romanToIntMap = {
    I: 1,
    V: 5,
    X: 10,
    L: 50,
    C: 100,
    D: 500,
    M: 1000,
  };

  const inputArray = [...s];
  let sum = 0;
  for (let i = 0; i < inputArray.length; i++) {
    const value = romanToIntMap[inputArray[i]];
    const nextValue = romanToIntMap[inputArray[i + 1]];
    if (value < nextValue) {
      sum -= value;
      continue;
    }
    sum += value;
  }

  return sum;
}
// @lc code=end
