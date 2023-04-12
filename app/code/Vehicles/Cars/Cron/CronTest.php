<?php

namespace Vehicles\Cars\Cron;
 
class CronTest
{
    public function execute()
    {
        // creating a file
        $current_date=date("YMd_his");
        $name_of_file='Customer_'.$current_date.'.csv';

// inserting the table headers
    $header_data=array(
        'Firstname',
        'Lastname',
        'Email',
        'Telephone'
    );
        $header_data=array_combine($header_data,$header_data);
        $data=[];
        $data[] = $header_data;
        $data[] = [
            'Firstname'=>'David',
            'Lastname'=>'Warner',
            'Email'=>'davidwarner175@gmail.com',
            'Telephone'=>'98241738901'
        ];
        $data[] = [
            'Firstname'=>'Tracy',
            'Lastname'=>'Wallice',
            'Email'=>'tracywallice953@gmail.com',
            'Telephone'=>'91620351778'
        ];
        $fp = fopen('/var/www/html/magento/var/export/'.$name_of_file,'w');
        
        foreach($data as $fields) {
            fputcsv($fp,$fields);
        }
        // closing the file
    }
}