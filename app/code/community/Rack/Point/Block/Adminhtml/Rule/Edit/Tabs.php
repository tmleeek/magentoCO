<?php

class Rack_Point_Block_Adminhtml_Rule_Edit_Tabs extends Mage_Adminhtml_Block_Widget_Tabs
{

    public function __construct()
    {
        parent::__construct();
        $this->setId('point_rule_edit_tabs');
        $this->setDestElementId('edit_form');
        $this->setTitle(Mage::helper('rackpoint')->__('Point Rule'));
    }
}
