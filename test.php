<?php
$x = 1;
while($x <= 5) {
    echo "The number is: $x \n";
    $x++;
}
//
//$color = [
//    3=> 'red',
//    6=>'blue',
//    9=>'yellow',
//];

//echo $color[9];

$name = ['dang','nam','sy duc'];

echo in_array('nam',$name) . "\n";


$a = array("red", "green", "blue");
array_pop($a);
print_r($a);


$a = array("a" => "red", "b" => "green", "c" => "blue");
echo array_shift($a);
print_r($a);
echo count($a);