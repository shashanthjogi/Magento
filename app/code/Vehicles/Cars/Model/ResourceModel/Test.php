<?php
namespace Vehicles\Cars\Model\ResourceModel;
class Test extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb
{  
    protected function _construct()
    {
        $this->_init('vehicles_cars','entity_id');
    }
}
