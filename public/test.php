<?php

class Test
{
    public ?string $text = null;
}


$object = new Test();
$object->text = 'string test';
//echo $object->text;
var_dump($object->text);