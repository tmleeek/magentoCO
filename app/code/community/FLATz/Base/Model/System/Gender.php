<?php

/**
 * @license http://opensource.org/licenses/osl-3.0.php OSL-3.0
 * @author Yoshihisa AMAKATA <amakata@flatz.jp>
 * @copyright (c) 2013, FLATz Inc.
 */
class FLATz_Base_Model_System_Gender {

    /**
     * Options getter
     *
     * @return array
     */
    public function toOptionArray() {
        return array(
            array('value' => '1', 'label' => Mage::helper('adminhtml')->__('Male')),
            array('value' => '2', 'label' => Mage::helper('adminhtml')->__('Female')),
            array('value' => '0', 'label' => Mage::helper('adminhtml')->__('Unselected')),
        );
    }

}
