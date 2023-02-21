<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Ngo extends MY_Controller {
    private $table = 'tbl_campaigns';
    private $className = 'Ngo' ;

    function __construct(){
        parent::__construct();
       
    }

    /** Show list of all Questions **/
    public function Index(){        
       
        $this->data['heading'] = 'NGO List';
        $this->data['classMainName'] = $this->className;
         
        $this->parser->parse('Ngo/index',$this->data);
    }
    
   
}
