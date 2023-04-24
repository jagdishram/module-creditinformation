<?php
/**
 * Copyright © Jag All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace Jag\CreditInformation\Api\Data;

interface CustomerInfoSearchResultsInterface extends \Magento\Framework\Api\SearchResultsInterface
{

    /**
     * Get customer_info list.
     * @return \Jag\CreditInformation\Api\Data\CustomerInfoInterface[]
     */
    public function getItems();

    /**
     * Set customer_id list.
     * @param \Jag\CreditInformation\Api\Data\CustomerInfoInterface[] $items
     * @return $this
     */
    public function setItems(array $items);
}

