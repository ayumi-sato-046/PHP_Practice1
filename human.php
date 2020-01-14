<?php

//Thinkable トレイトの think 関数を使えるように設定
require_once 'thinkable.php';

//Animal クラスを継承
require_once 'animal.php';
class Human extends Animal {

//趣味の情報を格納する変数を定義
    public $hobby = "";
   
//コンストラクタに名前・年齢・趣味の情報が入る引数を設定し、名前・年齢・趣味の各変数を引数の情報で初期化する 
    function __construct($name, $age, $hobby) {
        $this->name = $name;
        $this->age = $age;
        $this->hobby = $hobby;
        
    }
} 
?>
