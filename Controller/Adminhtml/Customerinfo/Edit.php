<?php
/**
 * Copyright © Jag, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Jag\CreditInformation\Controller\Adminhtml\Customerinfo;

use Magento\Framework\App\Action\HttpGetActionInterface;

/**
 * Edit Customer info action.
 */
class Edit extends \Jag\CreditInformation\Controller\Adminhtml\Customerinfo implements HttpGetActionInterface
{
    /**
     * @var \Magento\Framework\View\Result\PageFactory
     */
    protected $resultPageFactory;

    /**
     * @param \Magento\Backend\App\Action\Context $context
     * @param \Magento\Framework\Registry $coreRegistry
     * @param \Magento\Framework\View\Result\PageFactory $resultPageFactory
     */
    public function __construct(
        \Magento\Backend\App\Action\Context $context,
        \Magento\Framework\Registry $coreRegistry,
        \Magento\Framework\View\Result\PageFactory $resultPageFactory
    ) {
        $this->resultPageFactory = $resultPageFactory;
        parent::__construct($context, $coreRegistry);
    }

    /**
     * Edit Customer info
     *
     * @return \Magento\Framework\Controller\ResultInterface
     * @SuppressWarnings(PHPMD.NPathComplexity)
     */
    public function execute()
    {
        // 1. Get ID and create model
        $id = $this->getRequest()->getParam('customer_info_id');
        $model = $this->_objectManager->create(\Jag\CreditInformation\Model\CustomerInfo::class);
        

        // 2. Initial checking
        if ($id) {
            $model->load($id);
            if (!$model->getId()) {
                $this->messageManager->addErrorMessage(__('This Customer Info no longer exists.'));
                /** @var \Magento\Backend\Model\View\Result\Redirect $resultRedirect */
                $resultRedirect = $this->resultRedirectFactory->create();
                return $resultRedirect->setPath('*/*/');
            }
        }
        $this->_coreRegistry->register('jag_creditinformation_customer_info', $model);
       

        // 5. Build edit form
        /** @var \Magento\Backend\Model\View\Result\Page $resultPage */
        $resultPage = $this->resultPageFactory->create();
        $this->initPage($resultPage)->addBreadcrumb(
            $id ? __('Edit Customer Credit Info') : __('New Customer Credit Info'),
            $id ? __('Edit Customer Credit Info') : __('New Customer Credit Info')
        );
        $resultPage->getConfig()->getTitle()->prepend(__('Customer Credit Infos'));
        $resultPage->getConfig()->getTitle()->prepend($model->getId() ? __('Edit Customer Credit Info %1', $model->getId()) : __('New Customer Credit Info'));
        return $resultPage;
    }
}