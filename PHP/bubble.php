<?php

/*
 * 冒泡排序
 *
 * 原理：
 *      比较两个相邻的元素，将值大的元素交换到右边
 * 要点
 * 1.外层控制循环多少趟，内层控制每一趟的循环次数
 *      1）外层 n-1 趟，内层 n-i 次
 *      2）比较次数: n(n-1)/2，记录的移动次数最大 3n(n-1)/2
 * 2.时间复杂度：
 *      1)最好 O(n)，最坏 O(n^2)
 *
 */
function bubbleSortArray($data)
{
    $count = count($data);
    if ($count < 2) {
        return $data;
    }

    $origin = $data;
    $msg = 0;
    $times = 0;

    // 第一种
    for ($i = 0; $i < $count; $i++) {
        for ($j = $i + 1; $j < $count; $j++) {
            $msg++;
            if ($data[$i] > $data[$j]) {
                $times++;
                $tmp = $data[$i];
                $data[$i] = $data[$j];
                $data[$j] = $tmp;
            }
        }
    }

    // 第二种
//    for($i=0;$i<$count-1;$i++) {
//        for($j=0;$j<$count-$i-1;$j++) {
//            $msg++;
//            if ($data[$j] > $data[$j+1]) {
//                $times++;
//                $tmp = $data[$j];
//                $data[$j] = $data[$j+1];
//                $data[$j+1] = $tmp;
//            }
//        }
//    }

    // 第三种
//    for ($i = $count-1; $i >=0; $i--) {
//        for ($j = $i-1; $j >= 0; $j--) {
//            $msg++;
//            if ($data[$i] < $data[$j]) {
//                $times++;
//                $tmp = $data[$i];
//                $data[$i] = $data[$j];
//                $data[$j] = $tmp;
//            }
//        }
//    }

    echo '<排序前>';
    output($msg);
    output($times*3);
    output($origin);
    echo "<排序后>";
    output($data);
    echo "<hr>";

}

/*
 * 检验结果
 */
function checkMultiSortArray($r)
{
    $numbers = range(1, 100);
    for ($i = 0; $i < $r; $i++) {
        shuffle($numbers);
        $checkArray = array_slice($numbers, 0, mt_rand(1,$r));
        bubbleSortArray($checkArray);
    }
}

/*
 * 打印结果
 */
function output($result)
{
    echo '<pre>';
    print_r($result);
}

checkMultiSortArray(10);

?>