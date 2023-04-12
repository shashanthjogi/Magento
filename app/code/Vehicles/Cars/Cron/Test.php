<?php
namespace Vehicles\Cars\Cron;
use Psr\Log\LoggerInterface;
 
class Test
{
    /**
     *
     * @var LoggerInterface
     */
    protected $logger;

    /**
     * Test Cron constructor
     *
     * @param LoggerInterface $logger
     */
    public function __construct(
        LoggerInterface $logger,
    )
    {
        $this->logger = $logger;
    }
    public function execute()
    {
        try{
            $this->logger->info("This is a Cron Trial.");
        }
        catch(\Exception $ex)
        {
            $this->logger->info($ex->getMessage());
        }
    }
}