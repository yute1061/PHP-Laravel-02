<?php
// 課題1
$a = 3;
$b = 7;
echo $a + $b;

//課題2
$array_month = ['1月','2月','3月','4月','5月','6月',
'7月','8月','9月','10月','11月','12月'];
echo $array_month[7];

//課題3
$hello = "Hello,";
$name = "Yujiro";
$world = "'s World!";
echo $hello . $name . $world;

//課題4
$tech_boost = "tech";
$tech_boost .= "_boost";
echo $tech_boost;

//課題5
$calendar_2018 = [
  "January" => "1月",
  "February" => "2月",
  "March" => "3月",
  "April" => "4月",
  "May" => "5月",
  "June" => "6月",
  "July" => "7月",
  "August" => "8月",
  "September" => "9月",
  "October" => "10月",
  "November" => "11月",
  "December" => "12月"
];
echo $calendar_2018["December"];