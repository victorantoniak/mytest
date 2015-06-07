<?php
defined('_JEXEC') or die('Restricted access');

class plgJshoppingCheckoutOrderNetto extends JPlugin
{
    
    function onLoadCheckoutStep5(){
        updateAllprices();

    }
    
    function onLoadStep5save(){
        $jshopConfig = &JSFactory::getConfig();
        $jshopConfig->display_price_front_current = 1;
        updateAllprices();
    }
    
}