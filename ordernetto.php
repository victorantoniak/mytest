<?php
/**
* Version error fix 1
*/
defined('_JEXEC') or die();

//branch br2 - 0000 cb

class plgJshoppingCheckoutOrderNetto extends JPlugin{
    
    public function onLoadCheckoutStep5(){
        updateAllprices();

    }
    
    public function onLoadStep5save(){
        $jshopConfig = JSFactory::getConfig();
        $jshopConfig->display_price_front_current = 1;
        updateAllprices();
    }
    
    function nnn(){
        print "123";
    }
    
    function display(){
        return '000';
    }
    
    function xxx(){
        
    }
    
    function hot($x){
        return $x * 2;
    }
    
}