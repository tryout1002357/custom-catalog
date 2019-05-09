<?php


namespace Tryout\CustomCatalog\Model\Data;

use \Magento\Framework\Api\AttributeValueFactory;

/**
 * Class Custom Data
 * @SuppressWarnings(PHPMD.ExcessivePublicCount)
 */
class CustomData extends \Magento\Framework\Api\AbstractExtensibleObject implements
\CodeTheatres\CustomApi\Api\Data\CustomDataInterface
{
	
	/**
	 * Get Id.
	 *
	 * @return int|null
	 */
	public function getId()
	{
		return $this->_get(self::ID);
	}
	
	/**
	 * Set Id.
	 *
	 * @param int $id
	 * @return $this
	 */
	public function setId($id = null)
	{
		return $this->setData(self::ID, $id);
	}
	
	/**
	 * Get Customer Id.
	 *
	 * @return int|null
	 */
	public function getCustomerId()
	{
		return $this->_get(self::CUSTOMER_ID);
	}
	
	/**
	 * Set Customer Id.
	 *
	 * @param int $customerId
	 * @return $this
	 */
	public function setCustomerId($customerId = null)
	{
		return $this->setData(self::CUSTOMER_ID, $customerId);
	}
	
	/**
	 * Get Product Id.
	 *
	 * @return int|null
	 */
	public function getProductId()
	{
		return $this->_get(self::PRODUCT_ID);
	}
	
	/**
	 * Set Product Id.
	 *
	 * @param int $productId
	 * @return $this
	 */
	public function setProductId($productId = null)
	{
		return $this->setData(self::PRODUCT_ID, $productId);
	}

}