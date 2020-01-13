<?php

trait Thinkable {
    public function think(){
        print $this->name() . "は" . $this->hobby() . "について考えています。" . PHP_EOL;
        
    } 
    
}