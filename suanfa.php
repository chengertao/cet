<?php
 header("Content-Type:text/html;charset=utf-8");

$arr1 = array(2,4,1,5,3,10,3);
// var_dump(selectSort($arr1));
/**
* 1.冒泡排序
* 思路 :将每一个元素与剩余元素比较大小  然后排序
*           使用双层循环  外层获取是元素  内层比较
*时间复杂度  n*n
*/
function maopao($arr1)
{
    $len = count($arr1);
    //如果数组内元素个数小于等于1 直接返回
    if($len <= 1){ return  $arr1;}
    //如果元素个数大于1
    for($i=0;$i<=$len-1;$i++)
    {
        for($j=0;$j<$len-1;$j++)
        {
            //如果该元素比下一个元素大则互换位置
            if($arr1[$j]>$arr1[$j+1])
            {
                $tmp = $arr1[$j+1];
                $arr1[$j+1]=$arr1[$j];
                $arr1[$j] = $tmp;
            }
        }
    }
    return $arr1;
}
/**
* 快速排序
* 思路:使用二分法将数组分成两部分  然后分别排序最后件数组合并
*/
function  quickSort($arr1)
{
    if(count($arr1) <=1)
    {
        return $arr1;
    }
    $base = $arr1[0];//基准值  
    $left= []; //左数组
    $right = [];//有数组
    $len = count($arr1);
    for ($i=1; $i < $len ; $i++) { 
        if($arr1[$i] > $base)
        {
            $right[] = $arr1[$i];
        }else
        {
            $left[] = $arr1[$i];
        }
    }
     $left = quickSort($left);
     $right = quickSort($right);
    //合并数组 
    $arr2 = array_merge($left,array($base),$right);
    return $arr2;
}
/**
* 插入排序
* 思路:插入排序法思路：将要排序的元素插入到已经 假定排序号的数组的指定位置。
*/
function insertSort($arr1)
{
   for($i=1, $len=count($arr1); $i<$len; $i++) {  
        //获得当前需要比较的元素值。  
        $tmp = $arr1[$i];  
        //内层循环控制 比较 并 插入  
        for($j=$i-1;$j>=0;$j--) {  
   //$arr[$i];//需要插入的元素; $arr[$j];//需要比较的元素  
            if($tmp < $arr1[$j]) {  
                //发现插入的元素要小，交换位置   将后边的元素与前面的元素互换  
                $arr1[$j+1] = $arr1[$j];  
                //将前面的数设置为 当前需要交换的数  
                $arr1[$j] = $tmp;  
            } else {  
                //如果碰到不需要移动的元素  由于是已经排序好是数组，则前面的就不需要再次比较了。  
                break;  
            }  
        }  
    }  
    //将这个元素 插入到已经排序好的序列内。  
    return $arr1;  
}
/**
* 选择排序
*/
function selectSort($arr1)
{
    //实现思路 双重循环完成，外层控制轮数，当前的最小值。内层 控制的比较次数  
    //$i 当前最小值的位置， 需要参与比较的元素  
    for($i=0, $len=count($arr1); $i<$len-1; $i++) {  
        //先假设最小的值的位置  
        $p = $i;  
        //$j 当前都需要和哪些元素比较，$i 后边的。  
        for($j=$i+1; $j<$len; $j++) {  
            //$arr1[$p] 是 当前已知的最小值  
            if($arr1[$p] > $arr1[$j]) {  
     //比较，发现更小的,记录下最小值的位置；并且在下次比较时，   应该采用已知的最小值进行比较。  
                $p = $j;  
            }  
        }  
        //已经确定了当前的最小值的位置，保存到$p中。  
 //如果发现 最小值的位置与当前假设的位置$i不同，则位置互换即可  
        if($p != $i) {  
            $tmp = $arr1[$p];  
            $arr1[$p] = $arr1[$i];  
            $arr1[$i] = $tmp;  
        }  
    }  
    //返回最终结果  
    return $arr1;  
}
//***********************************************************//
/**
* 循环遍历二叉树  （递归）二叉树的先序、中序、后序
*/
class  BTreeNode
{
    public  $data ; //数据域
    public  $LeftHand  = NULL ; //左指针
    public  $RightHand = NULL ; //右指针
    public function  __construct($data){         
        if(!empty($data))
        { 
            $this->data = $data;
        }
    }
    //先序遍历（根，左，右）递归实现
    public  function PreTraverseBTree($BTree){ 
        if (NULL !== $BTree)
        {              
            var_dump($BTree->data);//根
            if (NULL !== $BTree->LeftHand)
            {
                $this->PreTraverseBTree($BTree->LeftHand); //递归遍历左树
            }                             
            if (NULL !== $BTree->RightHand)
            {
                $this->PreTraverseBTree($BTree->RightHand); //递归遍历右树
            }                    
        } 
    }
     //中序遍历(左，根，右)递归实现
    public  function  InTraverseBTree($BTree){                  
        if (NULL !== $BTree)
        {              
            if (NULL !== $BTree->LeftHand)
            {
                $this->InTraverseBTree($BTree->LeftHand); //递归遍历左树
            }            
            var_dump($BTree->data); //根  
            if (NULL !== $BTree->RightHand)
            {
                $this->InTraverseBTree($BTree->RightHand); //递归遍历右树
            }                   
        }    
    } 
    //后序遍历(左，右，根)递归实现
    public  function  FexTarverseBTree($BTree)
    {                
        if (NULL !== $BTree)
        {
            if (NULL !== $BTree->LeftHand)
            {
                $this->FexTarverseBTree($BTree->LeftHand); //递归遍历左树
            }                                 
            if (NULL !== $BTree->RightHand)
            {
                $this->FexTarverseBTree($BTree->RightHand); //递归遍历右树
            }
            var_dump($BTree->data); //根
        } 
    }
/**************************************************************/
//非递归实现二叉树的遍历
//前序遍历，访问根节点->遍历子左树->遍历右左树
 public function preorder($root){
    $stack = array();
    array_push($stack, $root);
    echo '<hr>';
    while(!empty($stack)){
        $center_node = array_pop($stack);
        echo $center_node->data.' ';

        if($center_node->RightHand != null) array_push($stack, $center_node->RightHand);
        if($center_node->LeftHand != null) array_push($stack, $center_node->LeftHand);
    }
}
//中序遍历，遍历子左树->访问根节点->遍历右右树
 public function inorder($root){
    $stack = array();
    $center_node = $root;
    while (!empty($stack) || $center_node != null) {
             while ($center_node != null) {
                 array_push($stack, $center_node);
                 $center_node = $center_node->LeftHand;
             }

             $center_node = array_pop($stack);
             echo $center_node->data . " ";

             $center_node = $center_node->RightHand;
         }
}
//后序遍历，遍历子左树->访问子右树->遍历根节点
 public function postorder($root){
        $pushstack = array();
        $visitstack = array();
        array_push($pushstack, $root);

        while (!empty($pushstack)) {
            $center_node = array_pop($pushstack);
            array_push($visitstack, $center_node);
            if ($center_node->LeftHand != null) array_push($pushstack, $center_node->LeftHand);
            if ($center_node->RightHand != null) array_push($pushstack, $center_node->RightHand);
        }

        while (!empty($visitstack)) {
            $center_node = array_pop($visitstack);
            echo $center_node->data. " ";
        }
     }
}
echo '先的内存为'.var_dump(memory_get_usage());
//创建五个节点
$A  = new  BTreeNode('A');
$B  = new  BTreeNode('B');
$C  = new  BTreeNode('C');
$D  = new  BTreeNode('D');
$E  = new  BTreeNode('E');
//连接形成一个二叉树
$A->LeftHand  = $B;  
$A->RightHand = $C;
$C->LeftHand  = $D;
$D->RightHand = $E;  
// echo "<hr>"; 
// //先序遍历
// echo '递归=====先序遍历的结果'.'<br>';
// $A->PreTraverseBTree($A);
// echo '<br/>中序遍历的结果'.'<br>';
// $A->InTraverseBTree($A); 
// echo  '<br/>后序列遍历的结果'.'<br/>';
// $A->FexTarverseBTree($A); 
// echo "<hr/>";
//-------------------------------------------------------------------
echo '<hr>';
echo '非递归====先序遍历的结果';
echo "<br>";
$A->preorder($A);
echo "<br>";
echo '非递归====中序遍历的结果'.'<br>';
$A->inorder($A);
echo "<br>";
echo '非递归====后序列遍历的结果'.'<br>';
$A->postorder($A);
echo '<hr/>';
echo '后的内存为'.var_dump(memory_get_usage());




