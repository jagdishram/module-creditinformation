<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Jag\CreditInformation\Model\Source;

use Magento\Framework\Data\OptionSourceInterface;
use Magento\Framework\View\Design\Theme\Label\ListInterface;

/**
 * Class CreditType
 */
class CreditType implements OptionSourceInterface
{
    /**
     * @var \Magento\Framework\View\Design\Theme\Label\ListInterface
     */
    protected $themeList;

    /**
     * Constructor
     *
     * @param ListInterface $themeList
     */
    public function __construct(ListInterface $themeList)
    {
        $this->themeList = $themeList;
    }

    /**
     * Get Credit Type options
     *
     * @return array
     */
    public function toOptionArray()
    {
        $options[] = ['label' => 'Credit', 'value' => 'credit'];
        $options[] = ['label' => 'Debit', 'value' => 'debit'];
        return $options;
        
    }
}
