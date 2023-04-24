<?php
/**
 * Copyright © Jag All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace Jag\CreditInformation\Api\Data;

interface CustomerInfoInterface
{

    const EMAIL = 'email';
    const CUSTOMER_ID = 'customer_id';
    const CUSTOMER_INFO_ID = 'customer_info_id';
    const NAME = 'name';
    const CREDIT_TYPE = 'credit_type';

    /**
     * Get customer_info_id
     * @return string|null
     */
    public function getCustomerInfoId();

    /**
     * Set customer_info_id
     * @param string $customerInfoId
     * @return \Jag\CreditInformation\CustomerInfo\Api\Data\CustomerInfoInterface
     */
    public function setCustomerInfoId($customerInfoId);

    /**
     * Get customer_id
     * @return string|null
     */
    public function getCustomerId();

    /**
     * Set customer_id
     * @param string $customerId
     * @return \Jag\CreditInformation\CustomerInfo\Api\Data\CustomerInfoInterface
     */
    public function setCustomerId($customerId);

    /**
     * Get name
     * @return string|null
     */
    public function getName();

    /**
     * Set name
     * @param string $name
     * @return \Jag\CreditInformation\CustomerInfo\Api\Data\CustomerInfoInterface
     */
    public function setName($name);

    /**
     * Get email
     * @return string|null
     */
    public function getEmail();

    /**
     * Set email
     * @param string $email
     * @return \Jag\CreditInformation\CustomerInfo\Api\Data\CustomerInfoInterface
     */
    public function setEmail($email);

    /**
     * Get credit_type
     * @return string|null
     */
    public function getCreditType();

    /**
     * Set credit_type
     * @param string $creditType
     * @return \Jag\CreditInformation\CustomerInfo\Api\Data\CustomerInfoInterface
     */
    public function setCreditType($creditType);
}

