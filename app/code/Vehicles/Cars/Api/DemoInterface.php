<?php
namespace Vehicles\Cars\Api;
 
/**
 * @api
 */
interface DemoInterface
{
    /**
     * Get name
     *
     * @return string
     */
    public function getProfile();

    /**
     * Create category
     *
     * @param string[] $postInfo
     * @return array
     */
    public function setCustomData($postInfo);
}