<?php
// echo "Hello";
// echo "\n";
// $string = "変数";
// $number = 5;
// define("constant","定数");

// echo $string;
// echo "\n";
// echo $number;
// echo "\n";
// echo constant;

// $name1 = "Sato"."Taro";
// $name2 = "Sato";
// $last_name = "Sato";
// $first_name = "Taro";

// echo $name1;
// echo "\n";
// echo $name2."Taro";
// echo "\n";
// echo $last_name. $first_name;

// $people = array("Taro","Jiro","Saburo");

// echo $people[0];
// echo "\n";
// echo $people[1];
// echo "\n";
// echo$people[2];

// $people =array(
//   "person1" => "Taro",
//   "person2" => "Jiro",
//   "person3" => "Saburo"
// );

// echo $people["person1"];
// echo "\n";
// echo $people["person2"];
// echo "\n";
// echo $people["person3"];

// $people = "Saburo";

// if ($people === "Taro") {
//   echo"太郎です";
// }elseif ($people === "JIro") {
//   echo"次郎です";
// }elseif ($people === "Saburo") {
//   echo"三郎です";
// }else {
//   echo"それ以外です";
// }

// switch ($people) {
//   case 'Taro':
//     echo "太郎です";
//     break;
//   case 'JIro':
//     echo "次郎です";
//     break;
//   case 'Saburo':
//     echo "三郎です";
//     break;
// }

// $count = 0;

// while ($count <= 100) {
//   if ($count === 20) {
//     break;
//   }
//   if ($count % 3 === 0) {
//     $count++;
//     $continue;
//   }
//   echo $count;
//   echo "\n";
//   $count++;
// }

// $people = array(
//   'Taro', 'Jiro', 'Saburo'
// );

// for ($i=0; $i < 3; $i++) { 
//   echo $people[$i];
//   echo"\n";
// }

// foreach ($people as $person => $name) {
//   echo $person."は".$name."です";
//   echo "\n";
// }

// $file = file_get_contents("./index.json");
// $json = json_decode($file);

// echo $json->name;
// echo "\n";
// foreach ($json->skills as $skill) {
//   echo $skill;
//   echo "\n";
// }

// echo $json->parent->father;
// echo "\n";
// echo $json->parent->mother;

// function hello(){
//   echo "Hello";
// }

// hello();

// $Company = "estra";
// $Service = "COACHTECH";

// echo $Company."は".$Service."を運営しています";

// for ($i=1; $i < 101; $i++) { 
//   if ($i % 3 === 0 && $i % 5 === 0) {
//     echo "fizzbuzz";
//     echo "\n";
//   }elseif ($i % 3 === 0) {
//     echo "fizz";
//     echo "\n";
//   }else {
//     echo $i;
//     echo "\n";
//   }
// }

// function sankaku($teihen,$takasa){
//   return $teihen * $takasa / 2;
// }

// echo sankaku(10,10);

// function sikaku($teihen,$takasa){
//   return $teihen * $takasa;
// }

// echo sikaku(10,10);

// function daikei($zyoutei,$katei,$takasa){
//   return ($zyoutei + $katei) * $takasa / 2;
// }

// echo daikei(10,10,10);