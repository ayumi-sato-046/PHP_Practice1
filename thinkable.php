<?php

trait Thinkable {
  //関数名をthink
  //Humanクラスのhobby変数を参照する
        function think() {
        print $this->name . 'は' . $this->hobby . 'について考えています。' . PHP_EOL;

    }

}
