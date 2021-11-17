<?php
    class producto {
        private $codp;
        private $nombre;
        private $stock;
        private $precioIVA;
        private $precioSinIVA;
        private $costoIVA;
        private $costoSinIVA;
        private $idrubro;
        private $rubro;
        private function construcCrear($codp, $nombre,$stock,$precioIVA,$precioSinIVA,$costoIVA,$costoSinIVA,$idrubro,$rubro) {
            $this->codp = $codp;
            $this->nombre = $nombre;
            $this->stock = $stock;
            $this->precioIVA = $precioIVA;
            $this->precioSinIVA = ($precioIVA - ($precioIVA * 0.21));
            $this->costoIVA = $costoIVA;
            $this->costoSinIVA = ($costoIVA - ($costoIVA * 0.21));
            $this->idrubro = $idrubro;
            $this->rubro = $rubro;
        }
        private function (Type $var = null) {
            $this->var = $var;
        }
        
    }
    $caca = new producto()
    


?>