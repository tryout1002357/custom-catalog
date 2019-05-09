<?php

namespace Tryout\CustomCatalog\Api;

use Tryout\CustomCatalog\Api\dataSetterInterface;

interface SubscriberInterface
{
    /**
     * @return void
     */
    public function processData(dataSetterInterface $data);
}