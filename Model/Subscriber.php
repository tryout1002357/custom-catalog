<?php

namespace Tryout\CustomCatalog\Model;

use Magento\Framework\Model\AbstractModel;
use Tryout\CustomCatalog\Api\dataSetterInterface;
use Tryout\CustomCatalog\Api\SubscriberInterface;


class Subscriber implements SubscriberInterface
{
    /**
     * {@inheritdoc}
     */

     public function __construct(
       
        \Tryout\CustomCatalog\Model\ProcessQueueMsg $processQueueMsg
       
    ) {
       
        $this->processQueueMsg = $processQueueMsg;
       
    }

    public function processData(dataSetterInterface $data)
    {
        //echo 'Message received: ' . $data->getData() . PHP_EOL;

    	$r = json_decode($data->getData(),true);

    	$this->processQueueMsg->process($r['putData']);

    	

    }


}