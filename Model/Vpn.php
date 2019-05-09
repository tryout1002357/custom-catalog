<?php
namespace Tryout\CustomCatalog\Model;

use Tryout\CustomCatalog\Api\VpnInterface;

use Magento\Framework\MessageQueue\PublisherInterface;
use Tryout\CustomCatalog\Api\dataSetterInterface;




class Vpn implements VpnInterface
{

    protected $_pageFactory;
    protected $data;
    public function __construct(
        
        PublisherInterface $publisher,
        dataSetterInterface $dataSetter
        )
    {
        
        $this->publisher = $publisher;
        $this->dataSetter = $dataSetter;
    }

    /**
     * Returns greeting message to user
     *
     * @api
     * @param string $name Product name.
     * @return string Greeting message with product name.
     */
    public function vpn($vpn) {

        $data = $this->productData($vpn);
        echo "<pre>===";
        print_r($data->getData());
        exit;
    }



    public function productData($vpn)
    {
       $objectManager = \Magento\Framework\App\ObjectManager::getInstance();
       $product = $objectManager->create('Magento\Catalog\Model\Product')->getCollection()->addFieldToFilter('vpn',$vpn);
        return $product;
    }


    public function setUpdateData()
    {
        
        $data = json_decode(file_get_contents('php://input'), true);

        echo json_encode(['status'=>1,'response'=>'data successfully queued to RabbitMQ']);
        
        
        
        $this->dataSetter->setData(json_encode($data));
        $this->publisher->publish('customCatalog', $this->dataSetter);


        exit;
    }



}