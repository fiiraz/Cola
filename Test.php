<?php

include_once 'Cola.php';
include_once 'Cabinet.php';
include_once 'MeyveSuyu.php';

$cola = new Cola;
$cabinet = new Cabinet;

print_r($cabinet->isFull());
echo '<br/>';
print_r($cabinet->addRaf1($cola));
echo '<br/>';
print_r($cabinet->openTheDoor());
echo '<br/>';
print_r($cabinet->addRaf1(new MeyveSuyu));
echo '<br/>';

print_r($cabinet->getRaf1());
echo '<br/>';
print_r($cabinet->getRaf2());
echo '<br/>';

for($i = 0; $i < 20; $i++){
    print_r($cabinet->addRaf1($cola));
    echo '<br/>';
}
echo '------------------------- <br/>';

for($i = 0; $i < 20; $i++){
    print_r($cabinet->addRaf2($cola));
    echo '<br/>';
}

echo '------------------------- <br/>';

for($i = 0; $i < 20; $i++){
    print_r($cabinet->addRaf3($cola));
    echo '<br/>';
}

print_r($cabinet->isFull());
echo '------------------------- <br/>';

print_r($cabinet->getRaf2());
echo '------------------------- <br/>';

print_r($cabinet->isFull());
?>