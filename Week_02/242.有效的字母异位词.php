/*
 * @lc app=leetcode.cn id=242 lang=php
 *
 * [242] 有效的字母异位词
 */

// @lc code=start
class Solution {

/**
 * @param String $s
 * @param String $t
 * @return Boolean
 */
function isAnagram($s, $t) {
        $length = strlen($s);
        if(strlen($t) != $length){
            return false;
        }
        $hash = [];
        for($i = 0;$i<$length;$i++){
            $hash[$s[$i]] = isset($hash[$s[$i]]) ? $hash[$s[$i]]+1 :1;
        }
        for($j = 0;$j<$length;$j++){
            if(!isset($hash[$t[$j]])){
                return false;
            }else if(isset($hash[$t[$j]]) && $hash[$t[$j]] ==1 ){
                unset($hash[$t[$j]]);
            }else if(isset($hash[$t[$j]]) && $hash[$t[$j]] >1 ){
                $hash[$t[$j]] = $hash[$t[$j]]-1;
            }
             
        }
        if(empty($hash)){
            return true;
        }else{
            return false;
        }
        

    }
}
// @lc code=end

