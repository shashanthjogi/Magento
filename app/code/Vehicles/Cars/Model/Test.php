<?php
namespace Vehicles\Cars\Model;
use Magento\Framework\Model\AbstractModel;

class Test extends AbstractModel
{
    
    
    protected function _construct()
    {
        $this->_init('Vehicles\Cars\Model\ResourceModel\Test');
       
    }
}

