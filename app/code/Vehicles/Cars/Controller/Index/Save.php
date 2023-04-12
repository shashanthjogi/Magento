<?php
namespace Vehicles\Cars\Controller\Index;

use Magento\Framework\App\Action\Context;
use Vehicles\Cars\Model\Test;

class Save extends \Magento\Framework\App\Action\Action
{
    /**
     * @var Test
     */

     protected $_test;

    /**
     * Summary of __construct
     * @param Context $context
     * @param Test $test
     */
    public function __construct(
        Context $context,
            Test $test
    ) {
        $this->_test = $test;
        parent::__construct($context);
    }
    /**
     * Summary of getFormAction
     * @return mixeds
     */
    public function execute()
    {
        $request_data = $this->getRequest()->getParams();
        print_r($request_data);
        $data = [
        'empid'=>$request_data['empid'],
        'fname'=>$request_data['fname'],
        'lname'=>$request_data['lname'],
        'email'=>$request_data['email'],
        'cname'=>$request_data['cname'],
        'department'=>$request_data['department'],
        'occupation'=>$request_data['occupation'],
        'mobile'=>$request_data['mobile'],
        'address'=>$request_data['address'],
        'date'=>$request_data['date'],
        'dob'=>$request_data['dob'],
        ];
        $test = $this->_test;

        $test->setData($data);
        $test->save();
        
        if($test->getId()){
            $this->messageManager->addSuccessMessage(__('data saved'));
        }
        else{
            $this->messageManager->addErrorMessage(__('data not saved'));
        }

        $resultRedirect = $this->resultRedirectFactory->create();
        $resultRedirect->setPath('Cars/index/index');
        return $resultRedirect;
        
    }
}
