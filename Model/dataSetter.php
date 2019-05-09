<?php

namespace Tryout\CustomCatalog\Model;

use Tryout\CustomCatalog\Api\dataSetterInterface;

class dataSetter implements dataSetterInterface
{
    /**
     * @var string
     */
    protected $data;

    /**
     * {@inheritdoc}
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * {@inheritdoc}
     */
    public function setData($data)
    {
        return $this->data = $data;
    }
}