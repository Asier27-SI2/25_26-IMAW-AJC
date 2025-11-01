<?php

class bombilla {
    private bool $encendida;
    
    public function __construct() {
		$this->encendida=false;
    }

    public function getEncendida(): bool {
        return $this->encendida;
    }
    public function encender(): void {
        $this->encendida=true;
        echo "<p><em>la bombilla esta ahora encendida</p></em>"."this->encendida es".$this->encendida;
    }
    public function apagar(): void {
        $this->encendida=false;
        echo "<p><em>la bombilla esta ahora apagada</p></em>"."this->apagada es".$this->encendida;
    }

    //public cambiar_estado($nuevo_estado): void(
    //   $this->encendida=$nuevo_estado;
    //)
}
?>