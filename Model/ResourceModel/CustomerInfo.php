<?php
/**
 * Copyright © Jag All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace Jag\CreditInformation\Model\ResourceModel;

use Magento\Framework\Model\ResourceModel\Db\AbstractDb;

class CustomerInfo extends AbstractDb
{

    /**
     * @inheritDoc
     */
    protected function _construct()
    {
        $this->_init('jag_creditinformation_customer_info', 'customer_info_id');
    }
}

