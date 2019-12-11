<?php

/**
 * 寻找两个有序数组的中位数
 *
 * 给定两个大小为 m 和 n 的有序数组 nums1 和 nums2。
 * 请你找出这两个有序数组的中位数，并且要求算法的时间复杂度为 O(log(m + n))。
 * 你可以假设 nums1 和 nums2 不会同时为空。
 *
 */
function findMedianSortedArrays($nums1, $nums2) {
    $n = count($nums1) + count($nums2);  //一共有多少个数据
    $gav = 0; //中位数
    $arr = array_merge($nums1, $nums2); //合并数组
    sort($arr); //排序

    if ($n % 2) { //判断奇数还是偶数
        $gav = $arr[intval($n / 2)];
    } else {
        $gav = ($arr[$n / 2] + $arr[$n / 2 - 1]) / 2;
    }

    return $gav;
}
var_dump(findMedianSortedArrays([-5], [-4,6,7,8,9]));

?>
