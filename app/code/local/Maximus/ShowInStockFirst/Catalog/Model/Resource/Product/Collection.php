<?php

class Maximus_ShowInStockFirst_Catalog_Model_Resource_Product_Collection extends Mage_Catalog_Model_Resource_Product_Collection
{
    /**
     * Set Order field
     *
     * @param string $attribute
     * @param string $dir
     * @return Mage_Catalog_Model_Resource_Product_Collection
     */
    public function setOrder($attribute, $dir = 'desc')
    {
        if ($attribute == 'price' || $attribute == 'inventory_in_stock') {
            $this->addAttributeToSort($attribute, $dir);
        } else {
            parent::setOrder($attribute, $dir);
        }
        return $this;
    }
}
