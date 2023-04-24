<?php
/**
 * Copyright © Jag All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace Jag\CreditInformation\Model\ResourceModel\CustomerInfo;

use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;

class Collection extends AbstractCollection
{

    /**
     * @inheritDoc
     */
    protected $_idFieldName = 'customer_info_id';

    /**
     * @inheritDoc
     */
    protected function _construct()
    {
        $this->_init(
            \Jag\CreditInformation\Model\CustomerInfo::class,
            \Jag\CreditInformation\Model\ResourceModel\CustomerInfo::class
        );
    }
}

