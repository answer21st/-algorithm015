class Solution {

    /**暴力法 时间复杂度为O(n^2)
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer[]
     */
    function twoSum($nums, $target) {
        $len = count($nums);
        for($i=0;$i<=$len-1;$i++) {
            for($j=$i+1;$j<=$len-2;$j++){
                if($nums[$j] == $target - $nums[$i]){
                    return [$i,$j];
                }
            }
        } 
    }
	
	/**数组  时间复杂度为O(n)
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer[]
     */
	function twoSum($nums, $target) {
        $need = [];
        $len = count($nums);
        for($i=0;$i<=$len-1;$i++){
            $diff = $target - $nums[$i];
            if(isset($need[$diff])) {
                return [$need[$diff],$i];
            }else{
                $need[$nums[$i]] = $i;
            }
        }
    }
}