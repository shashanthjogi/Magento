<?php
declare(strict_types=1);

namespace Vehicles\Cars\Model\Resolver;

use Magento\Framework\GraphQl\Config\Element\Field;
use Magento\Framework\GraphQl\Query\ResolverInterface;
use Magento\Framework\GraphQl\Schema\Type\ResolveInfo;

class Store implements ResolverInterface
{
    public function resolve(
        Field $field,
        $context,
        ResolveInfo $info,
        array $value=null,
        array $args=null
    ){
        $stores = [
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
            "firstname"=>"Jake",
            "lastname"=>"Baron",
            "email"=>"jakebaron982@gmail.com",
            "telephone"=>"9109236722",
            "city"=>"Miami",
            "state"=>"Florida",
            "Country"=>"USA",
            ],
            [
            "firstname"=>"Kate",
            "lastname"=>"Packard",
            "email"=>"katepackard628@gmail.com",
            "telephone"=>"9712439820",
            "city"=>"Utah",
            "state"=>"Texas",
            "Country"=>"USA",
            ],
            ];
            
            return[
                'total_count'=>count($stores),
                'items'=>$stores
            ];
    }
}