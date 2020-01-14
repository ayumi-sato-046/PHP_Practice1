<?php

class Animal {
    //名前を格納する変数と年齢を格納する変数
    public $name = '';
    public $age = '';
     
     function __construct($name, $age, $suffix = '') {
        $this->name = $name;
        $this->age = $age;
        $this->suffix = $suffix;
     }
    //say という名前の関数
    function say($animal) {
        print $this->name . 'です。' . $this->age . '歳です。' . PHP_EOL;

    }
}

//以下の2行は動作確認のための記述です。確認できたらコメントアウトしておきましょう
//$animal = new Animal("田中 太郎", 25);
//$animal->say($animal);

?>
