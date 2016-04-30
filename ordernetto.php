<?php
/**
* Version error fix 1
*/
defined('_JEXEC') or die();

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
    
    function xxx(){
        
    }
    
}