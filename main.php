<?php

require_once 'human.php';

class Main {
    
//コンストラクタが正しく実行され、名前・年齢・趣味の各変数を引数の情報で初期化
    static function start() {
        // コンストラクタ
         __construct();
    
        // インスタンスの生成と、変数への代入
        $tanaka = new Human("tanaka", 25, "kiing");
        $suzuki = new Human();
        $sato = new Human();

        // 関数を実行
        
    }
}

Main::start();