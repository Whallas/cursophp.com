<?php

// estrutura para criar qualquer serviço dessa api
class HG_API {
    private $key   = null;
    private $error = false;

    function __construct ( $key = null ) {
        if ( !empty($key) )  $this->key = $key; 
    }

    // função genérica de requesição
    // endpoint - final da url
    function request ( $endpoint = '', $params = array() ) {
        $uri = "https://api.hgbrasil.com/" . $endpoint . "?key=" . $this->key. "&format=json";
        
        if ( is_array($params) ) {

            // if ( !empty($params) ) {

                foreach ( $params as $key => $value ) {
                    if ( empty($value) ) continue;
                    $uri .= $key . "=" . urlenconde($value) . "&";
                }
                $uri = substr($uri, 0, -1);
            // }

            // @ - diretiva para em caso de erro, ignorar
            // file_get_contents - função usada nesse caso para obter o json
            $response = @file_get_contents($uri);
            $this->error = false;

            // decodifica json em objeto php
            return json_decode($response, true);
        
        } else {

            $this->error = true;
            return false;
        }
    }

    function is_error () {
        return $this->error;
    }

    function dolar_quotation () {
        $data = $this->request( 'finance/quotations' );    

        if ( !empty($data) && is_array( $data['results']['currencies']['USD'] ) ) {

            $this->error = false;
            return $data['results']['currencies']['USD'];
        }
        else {
            $this->error = true;
            return false;
        }
    }
}

?>