<?php

class BitstampModel extends Model {

    public function init() {
        $this->load("components", "Curl");
    }

    public function getSaldo($moeda) {
        
    }

    public function getBook($moeda1, $moeda2) {
//        $this->Curl->execute($url, $post, $method);
//        return {compras{preco1, volume1}, vendas{preco2, volume2}}
    }

}

?>
