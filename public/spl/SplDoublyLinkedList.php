<?php

//$list = new SplDoublyLinkedList();
//$list->push('test 1');
//$list->push('test 2');
//$list->push('test 3');
//
//echo $list->count().PHP_EOL;
//echo PHP_EOL;
//print_r($list->bottom());
//echo PHP_EOL;



//
//$stack = new SplStack();
//$stack->push('test 1');
//$stack->push('test 2');
//$stack->push('test 3');
////
////while (!$stack->isEmpty()){
////}
//echo $stack->top().'<br>';

//echo PHP_EOL;
//print_r($list->bottom());
//echo PHP_EOL;




$stack = new SplQueue();
$stack->enqueue('test 1');
$stack->enqueue('test 2');
$stack->enqueue('test 3');

echo 'first: '.$stack->bottom().'<br>';
echo 'last: '.$stack->top().'<br>';
echo $stack->dequeue().'<br>';
echo $stack->dequeue().'<br>';
echo $stack->dequeue().'<br>';
echo $stack->dequeue().'<br>';

//while (!$stack->isEmpty()){
//}
//    echo $stack->dequeue().'<br>';




//    $awdaw = [];
//    $awdaw[] = 'awdawdawd';
//    $awdaw[0];
//if (isset($awdaw[0])) {
//    echo $awdaw[0];
//}
//$lastINdex = (count($awdaw) - 1);
//unset($awdaw[$lastINdex]);

