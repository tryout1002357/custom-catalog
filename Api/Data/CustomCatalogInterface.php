<?php
 
namespace Tryout\CustomCatalog\Api\Data;
 
/**
 * Custom Data interface.
 * @api
 */
interface CustomCatalogInterface
{
	/**
     * Constants for keys of data array. Identical to the name of the getter in snake case.
     */
    const CUSTOMCATALOG_ID = 'customcatalog_id';
    const PRODUCT_ID = 'product_id';
    const SKU = 'sku';
    const COPY_WRITE_INFO = 'copy_write_info';
    const VPN   = 'VPN';
    const UPDATED_AT = 'updated_at';
    

    /**
     * Get CustomcatalogId.
     *
     * @return int
     */
    public function getCustomcatalog_Id();

     /**
     * Set CustomcatalogId.
     */
    public function setCustomcatalog_Id($customcatalogId);

    /**
     * Get ProductId.
     *
     * @return int
     */
    public function getProduct_Id();

     /**
     * Set ProductId.
     */
    public function setProduct_Id($productId);

    /**
     * Get Sku.
     *
     * @return varchar
     */
    public function getSku();

     /**
     * Set Sku.
     */
    public function setSku($sku);

    /**
     * Get CopyWriteInfo.
     *
     * @return varchar
     */
    public function getCopyWriteInfo();

     /**
     * Set CopyWriteInfo.
     */
    public function setCopyWriteInfo($copyWriteInfo);

    /**
     * Get Vpn.
     *
     * @return varchar
     */
    public function getVpn();

     /**
     * Set Vpn.
     */
    public function setVpn($vpn);

    /**
     * Get UpdatedAt.
     *
     * @return varchar
     */
    public function getUpdateAt();
 
    /**
     * Set UpdateAt.
     */
    public function setUpdateAt($updateAt);

	
}