<?php

    class Usuario{
        public $nombre;
        public $apellido;
        public $email;
        public $password;
        public $foto;
        public $id_rol;

        function __construct($n,$a,$e,$p,$f,$ir){
            $this->nombre=$n;
            $this->apellido=$a;
            $this->email=$e;
            $this->password=$p;
            $this->foto=$f;
            $this->id_rol=$ir;


        }




    }
    ?>