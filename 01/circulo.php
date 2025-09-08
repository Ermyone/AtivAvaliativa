<?php
    Class Circulo{
        public $raio;
        public $area;
        public $perimetro;
        public $pi;

        public function calcularArea(){
            $this->area = $this->raio*$this->raio*$this->pi;
            return $this->area;
        }

        public function calcularPerimetro(){
            $this->perimetro = 2*$this->pi*$this->raio;
            return $this->perimetro;
        }
    }
?>