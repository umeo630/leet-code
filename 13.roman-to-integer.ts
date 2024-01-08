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
  const romans = Object.keys(romanToIntMap);
  let sum = 0;
  for (let i = 0; i < inputArray.length; i++) {
    const value = inputArray[i];
    if (value === "I" || value === "X" || value === "C") {
      const nextValue = inputArray[i + 1];
      const index = romans.indexOf(value);
      if (nextValue === romans[index + 1] || nextValue === romans[index + 2]) {
        sum += romanToIntMap[nextValue] - romanToIntMap[value];
        i++;
        continue;
      }
    }
    sum += romanToIntMap[value];
  }

  return sum;
}
// @lc code=end
