<?php
/**
 * Copyright © Jag All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace Jag\CreditInformation\Model;

use Jag\CreditInformation\Api\Data\CustomerInfoInterface;
use Magento\Framework\Model\AbstractModel;

class CustomerInfo extends AbstractModel implements CustomerInfoInterface
{

    /**
     * @inheritDoc
     */
    public function _construct()
    {
        $this->_init(\Jag\CreditInformation\Model\ResourceModel\CustomerInfo::class);
    }

    /**
     * @inheritDoc
     */
    public function getCustomerInfoId()
    {
        return $this->getData(self::CUSTOMER_INFO_ID);
    }

    /**
     * @inheritDoc
     */
    public function setCustomerInfoId($customerInfoId)
    {
        return $this->setData(self::CUSTOMER_INFO_ID, $customerInfoId);
    }

    /**
     * @inheritDoc
     */
    public function getCustomerId()
    {
        return $this->getData(self::CUSTOMER_ID);
    }

    /**
     * @inheritDoc
     */
    public function setCustomerId($customerId)
    {
        return $this->setData(self::CUSTOMER_ID, $customerId);
    }

    /**
     * @inheritDoc
     */
    public function getName()
    {
        return $this->getData(self::NAME);
    }

    /**
     * @inheritDoc
     */
    public function setName($name)
    {
        return $this->setData(self::NAME, $name);
    }

    /**
     * @inheritDoc
     */
    public function getEmail()
    {
        return $this->getData(self::EMAIL);
    }

    /**
     * @inheritDoc
     */
    public function setEmail($email)
    {
        return $this->setData(self::EMAIL, $email);
    }

    /**
     * @inheritDoc
     */
    public function getCreditType()
    {
        return $this->getData(self::CREDIT_TYPE);
    }

    /**
     * @inheritDoc
     */
    public function setCreditType($creditType)
    {
        return $this->setData(self::CREDIT_TYPE, $creditType);
    }
}

