<?php
    class comentarios{
        private $bd;
        private $comentario;

        public function constructor(){
            $this->bd=conectar::conexion();
        }

        public function ult_comentarios(){
            $consulta=$this->query("select * from comentarios limit 4");
            $i=0;
            while($fila=$consulta->fetch_assoc){
                $
            }
        }
    }