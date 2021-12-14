<?php
    class Participacion{
        public $parId;
        public $conId;

        function __construct($p,$c){
            $this->parId = $p;
            $this->conId = $c;
        }
    }
?>