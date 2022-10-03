<?php
/**
 * Notes:
 * User: shyir
 * DateTime: 2022/10/3 22:50
 */
//把数组分割为带有两个元素的数组
$cars=array("Volvo","BMW","Toyota","Honda","Mercedes","Opel");
print_r(array_chunk($cars,2));
//把数组分割为带有两个元素的数组，并保留原始数组中的键名：
$age=array("Bill"=>"60","Steve"=>"56","Mark"=>"31","David"=>"35");
print_r(array_chunk($age,2,true));
//把数组分割为带有两个元素的数组，不保留原始数组中的键名：
$age=array("Bill"=>"60","Steve"=>"56","Mark"=>"31","David"=>"35");
print_r(array_chunk($age,2,false));