<?php
/**
 * Copyright © Jag All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace Jag\CreditInformation\Api;

use Magento\Framework\Api\SearchCriteriaInterface;

interface CustomerInfoRepositoryInterface
{

    /**
     * Save customer_info
     * @param \Jag\CreditInformation\Api\Data\CustomerInfoInterface $customerInfo
     * @return \Jag\CreditInformation\Api\Data\CustomerInfoInterface
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function save(
        \Jag\CreditInformation\Api\Data\CustomerInfoInterface $customerInfo
    );

    /**
     * Retrieve customer_info
     * @param string $customerInfoId
     * @return \Jag\CreditInformation\Api\Data\CustomerInfoInterface
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function get($customerInfoId);

    /**
     * Retrieve customer_info matching the specified criteria.
     * @param \Magento\Framework\Api\SearchCriteriaInterface $searchCriteria
     * @return \Jag\CreditInformation\Api\Data\CustomerInfoSearchResultsInterface
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function getList(
        \Magento\Framework\Api\SearchCriteriaInterface $searchCriteria
    );

    /**
     * Delete customer_info
     * @param \Jag\CreditInformation\Api\Data\CustomerInfoInterface $customerInfo
     * @return bool true on success
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function delete(
        \Jag\CreditInformation\Api\Data\CustomerInfoInterface $customerInfo
    );

    /**
     * Delete customer_info by ID
     * @param string $customerInfoId
     * @return bool true on success
     * @throws \Magento\Framework\Exception\NoSuchEntityException
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function deleteById($customerInfoId);
}

