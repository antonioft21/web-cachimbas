<?php
    class lanzamientos{
        private $bd;
        private $lanzamiento;
        
        public function constructor(){
            $this->bd=conectar::conexion();
        }

        public function ult_lanzamiento(){
            $consulta=$this->bd->query("select serie, plataforma from lanzamientos limit 4");
            $i=0;
            while($fila=$consulta->fetch_assoc()){
                $serie=$this->$fila[$i]["serie"];
                $plataforma=$this->$fila[$i]["plataforma"];
                $i++;
            }
            return $this->lanzamiento;
        }
    }
?>

