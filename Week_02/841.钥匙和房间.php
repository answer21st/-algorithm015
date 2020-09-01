/*
 * @lc app=leetcode.cn id=841 lang=php
 *
 * [841] 钥匙和房间
 */

// @lc code=start
class Solution 
{
    protected $num = 0;
    protected $visited;
    /**
     * @param Integer[][] $rooms
     * @return Boolean
     */
    public function canVisitAllRooms($rooms) 
    {
        $n = count($rooms);
        $this->$visited = array_fill(0, $n, false);
        $this->dfs($rooms, 0);
        return $this->num === $n;
    }

    private function dfs($rooms, $x)
    {
        $this->visited[$x] = true;
        $this->num++;
        foreach ($rooms[$x] as $item) {
            if (!$this->visited[$item]) {
                $this->dfs($rooms, $item);
            }
        }
    }
}

// @lc code=end

