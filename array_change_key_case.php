<?php
/**
 * Notes:
 * User: shyir
 * DateTime: 2022/10/3 22:50
 */
//将数组的所有的键转换为大写字母：
$age = array ( "Bill" => "60", "Steve" => "56", "Mark" => "31" );
print_r (array_change_key_case ($age, CASE_UPPER));

//将数组的所有的键转换为小写字母：
$age = array ( "Bill" => "60", "Steve" => "56", "Mark" => "31" );
print_r (array_change_key_case ($age, CASE_LOWER));

//如果运行 array_change_key_case() 之后有两个或者多个的键相等（比如 "b" 和 "B"），则最后的元素会覆盖其他元素：

$pets = array ( "a" => "Cat", "B" => "Dog", "c" => "Horse", "b" => "Bird" );
print_r (array_change_key_case ($pets, CASE_UPPER));

