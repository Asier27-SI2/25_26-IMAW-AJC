<?php
    class cubo{
        private bool $resuelto;
        private int $tamanio;

        public function __construct(int $tamanio) {
        $this->resuelto = true;
        $this->tamanio = $tamanio;
    }
    public function getRevuelto(): bool {
        return $this->resuelto;
    }
    public function revolver(): void {
        $this->resuelto = false;
        echo "Ahora está todo revuelto\n";
    }
}
?>
