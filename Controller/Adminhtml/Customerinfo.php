<?php
/**
 * Copyright © Jag, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Jag\CreditInformation\Controller\Adminhtml;

abstract class Customerinfo extends \Magento\Backend\App\Action
{
    /**
     * Authorization level of a basic admin session
     *
     * @see _isAllowed()
     */
    const ADMIN_RESOURCE = 'Jag_CreditInformation::customer_info_save';

    /**
     * Core registry
     *
     * @var \Magento\Framework\Registry
     */
    protected $_coreRegistry;

    /**
     * @param \Magento\Backend\App\Action\Context $context
     * @param \Magento\Framework\Registry $coreRegistry
     */
    public function __construct(\Magento\Backend\App\Action\Context $context, \Magento\Framework\Registry $coreRegistry)
    {
        $this->_coreRegistry = $coreRegistry;
        parent::__construct($context);
    }

    /**
     * Init page
     *
     * @param \Magento\Backend\Model\View\Result\Page $resultPage
     * @return \Magento\Backend\Model\View\Result\Page
     */
    protected function initPage($resultPage)
    {
        $resultPage->setActiveMenu('Jag_CreditInformation::customer_info_save')
            ->addBreadcrumb(__('Jag'), __('Jag'))
            ->addBreadcrumb(__('Customer Credit Info'), __('Customer Credit Info'));
        return $resultPage;
    }
}