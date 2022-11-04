<?php

// abc xxxxxx abc
// abc adwdqqawd ???
//echo md5('qwerty');
//echo sha1('qwerty');
//echo password_hash('qwerty', PASSWORD_ARGON2I);

class A
{
    public $a;
    private $b;
    public function setB($b){
        $this->b = $b;
    }
    public function __sleep()
    {
        return ['a'];
    }
}

$obj = new A();
$obj->a = 10;
$obj->setB(12);

$str = serialize($obj);

echo '<pre>';
    print_r($obj);
echo '</pre>';
echo '<pre>';
print_r($str);
echo '</pre>';

$str = 'O:1:"A":2:{s:1:"a";i:10;s:4:"Ab";i:12;}';
//$str = 'O:1:"A":1:{s:1:"a";i:10;}';
$unser = unserialize($str);
echo '<pre>';
print_r($unser);
echo '</pre>';
