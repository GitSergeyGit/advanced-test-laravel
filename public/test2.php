<?php

$id = $_GET['id'] ?? 1;
$sql = 'SELECT * FROM users WHERE id = ' . $id;


echo $sql;

//foreach (new DirectoryIterator(__DIR__) as $fileInfo) {
//    if($fileInfo->isDot()) continue;
//    echo $fileInfo->getFilename() . "<br>\n";
//}
//
//trait Test
//{
//    public function qwe()
//    {
//        echo 'Trait test';
//    }
//}
//
//trait Test2
//{
//    use Test;
//
//    private function tets()
//    {
//        echo 'Trait test2';
//    }
//}
//
//class Model
//{
////    use Test2 {
////        Test2::tets as public;
////    }
//    use Test2;
//
//    public function getTest()
//    {
//        $this->tets();
//    }
//
//    private function tets()
//    {
//        echo 'Model';
//    }
//}
//
//$obj = new Model();
//$obj->getTest();

//
//class Product extends Model
//{
//    public static function getSome(){
//        return 'Product';
//    }
//}
//
//
//
////$obj = new Model();
////echo $obj->getClass();
//
//$obj = new Product();
//echo $obj->getClass();

//$message = 1;
//$message2 = 1;
//// Наследуем $message
//$example = function ($name) {
//    var_dump($message);
//};
//
//
//var_dump($example);
//$example('name');

///
///
///
///
///
///
///
///
///
///
///
//$example('name');
