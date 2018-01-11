<?php

class Btc extends Controller {

    public function start() {
        $filename = $_SERVER['DOCUMENT_ROOT'] . "/outputs/btc.json";
        while (true) {

            if (!file_put_contents($filename, $data)) {
                $this->stop("Erro 1");
            }
        }
//        retornar a mesma interface do model
        return null;
    }

    public function stop($p = null) {
        die($p);
    }

}

?>
