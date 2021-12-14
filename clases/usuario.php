<?php
    class usuario
    {
        public $foto;
        public $nombre;
        public $apellido;
        public $cedula;
        public $email;
        public $contraseña;
        public $nivel;

        //($foto,$nombre,$apellido,$cedula,$email,$contraseña,$nivel);

        function __construct ($f,$n,$a,$ce,$em,$c,$ni)
        {
            $this->foto = $f;
            $this->nombre = $n;
            $this->apellido = $a;
            $this->cedula = $ce;
            $this->email = $em;
            $this->contraseña = $c;
            $this->nivel =$ni;
        }

    }

?>