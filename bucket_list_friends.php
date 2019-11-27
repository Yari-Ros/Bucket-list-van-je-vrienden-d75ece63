<?php
echo "Hello!
You want to make a bucket list? Well, you're in luck, because I got the right one just for you! All I need is just a some information and then you're all set.
Let's get started shall we?";
$friends = array();
$Afriends = readline("With how many are you guys?");

for ($i=0; $i < $Afriends ; $i++) {
  $name = readline ("What is your name? ");
  $dream = readline ("What goal do you aspire to achieve in life? ");
  $array =  array(
  'Name:' => $name,
  'Dream: ' => $dream,
);
array_push($friends, $array);
}
foreach ($friends as $item)  {
  foreach ($item as $key => $value) {
    echo ($key . PHP_EOL . $value . PHP_EOL);
  }
}
// $hoeveelheid = readline ("Hoeveel activiteiten wil je invoeren? ");
//
//
// if (is_numeric($hoeveelheid)) {
//   $lijst = array();
// }
//
// else {
//   echo "Je moet een getal invoeren";
//   exit();
// }
//
// for ($i=1; $i <=$hoeveelheid ; $i++) {
//
// $activiteiten = readline ("Welk activiteit wil je toevoegen?");
// array_push($lijst,$activiteiten);
// }
//
// echo "Je activiteiten zijn:" . PHP_EOL;
#Oplossing
//foreach ($lijst as $item) {
//  echo ($item) . PHP_EOL;
//}
?>