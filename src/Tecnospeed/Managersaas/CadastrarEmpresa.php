<?php

namespace Tecnospeed\Managersaas;

/**
 * Endpoint de descartar
 * 
 * @link https://managersaas.tecnospeed.com.br:1337/api/v1/empresa?token=545m0cetr2r0tjll3di1533572601234
 * @author Victor Aguiar <victordeaguiarsouza@gmail.com>
 * @copyright (c) 2018
 */
class CadastrarEmpresa extends \Tecnospeed\Commons\Endpoint {
    
    /**
     * @return string o nome do endpoint da model 
    */
    public function getEndpoint(){
        
        return "empresa";
    }    
}