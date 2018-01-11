<?php

class BitstampModel extends Model {

    public function init() {
        $this->load("components", "Curl");
    }

    public function getSaldo($moeda) {
        
    }

    public function getBook($moeda1, $moeda2) {
        $book = $this->Curl->execute("https://www.bitstamp.net/api/v2/order_book/" . strtolower($moeda1) . strtolower($moeda2) . "/");
        pr($book);
//        return {compras{preco1, volume1}, vendas{preco2, volume2}}
    }

}

?>
