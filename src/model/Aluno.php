<?php

class Aluno{
    private $rm;

        public function __construct($rm){
        $this->rm = $rm;
    }

    public function getRm(): string{
        return $this->rm;
    }
     public function setRm(): string{
        $this->rm 
}
}