<?php
    class Participante{
        public $nombre;
        public $apellido;
        public $email;
        public $cedula;
        public $institucion;
        public $rol_participante;

        function __construct($n,$a,$e,$t,$i,$r){
            $this->nombre = $n;
            $this->apellido = $a;
            $this->email = $e;
            $this->cedula = $t;
            $this->institucion = $i;
            $this->rol_participante = $r;
        }
    }
?>