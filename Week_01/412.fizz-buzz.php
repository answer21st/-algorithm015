/*
 * @lc app=leetcode.cn id=412 lang=php
 *
 * [412] Fizz Buzz
 */

// @lc code=start
class Solution {

        <!-- 
    function fizzBuzz($n) {
        $arr = [];
        for ($i = 1; $i<=$n; $i++){
            if($i>=5){
                if( $i%3 == 0 )  {
                    if($i%5 == 0) {
                        $arr[$i] =  "FizzBuzz";
                    }else{
                        $arr[$i] = "Fizz";
                    }
                } else if($i%5 == 0) {
                    $arr[$i] = "Buzz";
                }else{
                    $arr[$i] =  (string)$i;
                }
            }else{
                if($i == 3){
                    $arr[$i] = "Fizz";
                }else{
                    $arr[$i] = (string)$i;
                }
            } 
        }
        return $arr;
    } -->
    public $names = array(
        3 => 'Fizz',
        5 => 'Buzz'
    );
    function fizzBuzz($n) {
        $arr = [];
        for($i = 1;$i <= $n;$i++) {
            $str = '';
            foreach($this->names as $k => $v) {
                if($i%$k == 0){
                    $str.= $v;
                }
            }
            $arr[$i] = empty($str) ? ''.$i : $str;
        }
        return $arr;  
    }
} 
// @lc code=end

