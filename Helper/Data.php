<?php

/*
 * Description: Data.php
 * @date: 18-mag-2018
 * @author Simone Monterubbiano <s.monterubbiano@drop.it>
 */
namespace C4B\FreeProduct\Helper;

use Magento\Sales\Api\Data\CreditmemoInterface;
use Magento\Sales\Api\Data\InvoiceInterface;
use Magento\Sales\Api\Data\OrderInterface;

class Data extends \Magento\Framework\App\Helper\AbstractHelper
{

    const XML_PATH_FREE_PRODUCT_ENABLED = 'free_product/general/enable';

    /**
     * \Magento\Framework\App\Config\ScopeConfigInterface
     * 
     * @var type 
     */
    protected $scopeConfig;

    /**
     * Data constructor.
     * @param \Magento\Framework\App\Helper\Context $context
     */
    public function __construct(
        \Magento\Framework\App\Helper\Context $context,
        \Magento\Framework\App\Config\ScopeConfigInterface $scopeConfig
    ) {
        $this->scopeConfig = $scopeConfig;
    }

    /**
     * Get Admin discount tax confg
     * @return mixed
     */
    public function getFreeProductEnabled()
    {
        return $this->scopeConfig->getValue(self::XML_PATH_FREE_PRODUCT_ENABLED);
    }

}
