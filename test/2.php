<?php
/**
*  交换$a $b   不使用第三个变量
*/

$a = "111";  
$b= "010";  
  //方法一：  交换$a $b   不使用第三个变量
// $a = $a^$b;
// $b = $b^$a;  
// $a = $a^$b;  
//方法二：  
// list($a, $b) = array($b, $a);  
//方法三：  
// $a = $a . $b;  
// $b = strlen( $b );  
// $b = substr( $a, 0, (strlen($a) - $b ) );  
// $a = substr( $a, strlen($b) );  
  
//方法四：(这个就比较有限制，必须用一个两个字符串都都不能出现的字符做为分隔符)  
// $a = $b.','.$a ;  
// $a = explode(',', $a);  
// $b = $a[1];  
// $a = $a[0];  
//方法五：(这个是当两个数都是数字的时候)  
$a = $a + $b;  
$b = $a - $b;  
$a = $a - $b;  



// class Person
// {
//     private  $obj = '';
//     public function  __construct()
//     {
//          $this->obj = new stdClass();
//     }
//     public function get()
//     {
//         $name = 'xm';
//         $obj->name = $name;
//         var_dump(empty($object->name),$obj);die;
//     }
// }
// $person = new person;
// $person->get();




