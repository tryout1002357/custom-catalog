<?php

namespace Tryout\CustomCatalog\Api;

interface dataSetterInterface
{
    /**
     * @param string $message
     * @return void
     */
    public function setData($data);

    /**
     * @return string
     */
    public function getData();
}