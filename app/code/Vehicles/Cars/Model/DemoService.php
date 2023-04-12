<?php
namespace Vehicles\Cars\Model;
use Magento\Customer\Model\GroupFactory;
 
class DemoService implements \Vehicles\Cars\Api\DemoInterface
{
    protected $_group;
    public function __construct(
        GroupFactory $group
    )
    {
        $this->_group=$group;
    }
    /**
     * Get name
     *
     * @return string
     */
    public function getProfile()
    {
    return [
    [
    "firstname"=>"Shashanth",
    "lastname"=>"Jogi",
    "email"=>"shashanth.jogi@embitel.com",
    "telephone"=>"9741700969",
    "city"=>"Bangalore",
    "state"=>"Karnataka",
    "Country"=>"India",
    ],
    [
    "firstname"=>"Bryan",
    "lastname"=>"Wight",
    "email"=>"bryanwight142@gmail.com",
    "telephone"=>"9865283517",
    "city"=>"Miami",
    "state"=>"Florida",
    "Country"=>"USA",
    ],
    [
    "firstname"=>"Jane",
    "lastname"=>"Dawson",
    "email"=>"Janedawson872@gmail.com",
    "telephone"=>"9251845298",
    "city"=>"Utah",
    "state"=>"Texas",
    "Country"=>"USA",
    ],
    ];
}
 /**
     * set Data
     *
     * @param string[] $postInfo
     * @return array
     */
public function setCustomData($postInfo)
    {
        try{
            $data=[
                'customer_group_code'=>$postInfo['groupName'],
                'tax_class_id' => 3
            ];
            $group = $this->_group->create();
            $group->setData($data);
            $group->save();
            return [
                
                    'groupId'=>1,
                    'groupName'=>'Response Recorded!'
                
                ];
        }
        catch(\Throwable $th)
        {
            $th->getMessage();
        }
}
}