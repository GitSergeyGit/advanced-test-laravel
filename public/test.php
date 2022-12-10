<?php

// int
// string
// float
// bool

// array
// object

// null
// resource

//$str = 'awdawd';
//$array[1]
//
//
//$array = ['a', 'w', 'd'];
////$array[0]
//
////$a = function() use($array)
////{
////};
//
//
//function awdawdaw (): void
//{
//    if (1 == 1) {
//        return;
//    }
//
//    ////
//    ////
//    ////
//    ////
//    ////
//}
//
//// paid
//// pending
//
//function awdaw (): "paid"|"pending"
//{
//    if (1 == 1) {
//        exit();
//    }
//
//    ////
//    ////
//    ////
//    ////
//    ////
//    exit();
//}

//class Custom implements Iterator
//{
//    public $data;
//    public $position = 0;
//
//    public function __construct($array){
//        $this->data = $array;
//    }
//    public function current(){
//        return $this->data[$this->position];
//    }
//    public function next(){
//        ++$this->position;
//    }
//    public function key(){
//        return $this->position;
//    }
//    public function valid(){
//        return isset($this->data[$this->position]);
//    }
//    public function rewind(){
//        $this->position = 0;
//    }
//}
//$arawr = [
//    [
//        'id' => 1,
//        'title' => 'title',
//    ],[
//        'id' => 1,
//        'title' => 'title',
//    ],[
//        'id' => 1,
//        'title' => 'title',
//    ],[
//        'id' => 1,
//        'title' => 'title',
//    ],[
//        'id' => 1,
//        'title' => 'title',
//    ],[
//        'id' => 1,
//    ],[
//        'id' => 1,
//        'title' => 'title',
//    ],[
//        'id' => 1,
//        'title' => 'title',
//    ],
//];
//
//foreach ($arawr as &$item) {
////    $item['id']
////    $item['title'] ?? ''
//}
//fn(mixed $value = null) => $array;

//var_dump($a);
//$a();
// 0
// ''
// null
// null
// []

//'false'

//
//$awd = new DirectoryIterator(__DIR__);
//
//var_dump($awd);
//foreach ($awd as $item) {
//    echo $item."<br>";
//}
//
//function xrange($start, $limit, $step = 1) {
//    if ($start <= $limit) {
//        if ($step <= 0) {
//            throw new LogicException('Шаг должен быть положительным');
//        }
//
//        for ($i = $start; $i <= $limit; $i += $step) {
//            yield $i;
//        }
//    } else {
//        if ($step >= 0) {
//            throw new LogicException('Шаг должен быть отрицательным');
//        }
//
//        for ($i = $start; $i >= $limit; $i += $step) {
//            yield $i;
//        }
//    }
//}
//
//function getRows($file) {
//    $handle = fopen($file, 'rb');
//    if (!$handle) {
//        throw new Exception();
//    }
//    $result = [];
//    while (!feof($handle)) {
//        $result[] = fgetcsv($handle);
//    }
//    fclose($handle);
//    return $result;
//}
//
//function genertor()
//{
//    yield 1;
//    yield 2;
//    yield 3;
//    yield 3;
//    yield 3;
//    yield 3;
//    yield 3;
//}
//
//foreach (genertor() as $item) {
//    var_dump($item);
//    echo '<br>';
//}

// /home/vagrant/code/hillel-php.laravel

//
//
//echo strlen('qwe').'<br>';
//echo strlen('фів').'<br>';
//echo mb_strlen('qwe').'<br>';
//echo mb_strlen('фів').'<br>';


//phpinfo();



//error_reporting(E_PARSE);

//var_dump(str_contains("foobar", null));
// Deprecated: Passing null to parameter #2 ($needle) of type string
//             is deprecated



trait Test
{

}

trait Test2
{
    use Test;
}


//class A
//{
//    public static $test = 1;
//
//    public function getTest(){
//        echo static::$test;
////        echo self::$test;
//    }
//}
//
//class B extends A
//{
//    public static $test = 10;
//
//}
////$obj = new A();
//
////$obj->getTest();
//
//
//$obj = new B();
//
//$obj->getTest();




























