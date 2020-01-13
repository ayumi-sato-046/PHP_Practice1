<?php

class Animal {
    //名前を格納する変数と年齢を格納する変数
    public $name = 'Mr Tanaka';
    public $age = 25;
    
    //say という名前の関数
    function say() {
        print $this->name . 'です。' . $this->age . '歳です。' . PHP_EOL;
    }
}
$animal = new Animal();
$animal->say();

// 以下の2行は動作確認のための記述です。確認できたらコメントアウトしておきましょう。
//$animal = new Animal("田中 太郎", 25);
//$animal->say();
?>
