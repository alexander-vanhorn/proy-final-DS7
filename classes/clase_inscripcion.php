<?php
    class Inscripcion{
        public $parId;
        public $monto;
        public $descuento;

        function __construct($p,$m,$d){
            $this->parId = 1;
            $this->monto = $m;
            $this->descuento = $d;
        }
    }
?>