<?php
namespace Vehicles\Cars\Model\ResourceModel\Test;
class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{  
    protected function _construct()
    {
        $this->_init(
            'Vehicles\Cars\Model\Test',
            'Vehicles\Cars\Model\ResourceModel\Test'
        );
    }
}