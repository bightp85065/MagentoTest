<?php

class Demo_Bohan_IndexController extends Mage_Core_Controller_Front_Action
{
    /**
     * Category view action
     */
    public function indexAction()
    {
        echo "test controller indexAction";
        
        $categoryId = (int) $this->getRequest()->getParam('id', false);
        if (!$categoryId) {
            return false;
        }
        echo "<br> id = ".$categoryId;
        
        
        
    }
    public function viewAction()
    {
        echo "test controller viewAction";
    }
}
