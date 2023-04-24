<?php
/**
 * Copyright © Jag All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace Jag\CreditInformation\Controller\Adminhtml\Customerinfo;

use Magento\Framework\Exception\LocalizedException;

class Save extends \Magento\Backend\App\Action
{

    protected $dataPersistor;
    protected $customerRepository;

    /**
     * @param \Magento\Backend\App\Action\Context $context
     * @param \Magento\Framework\App\Request\DataPersistorInterface $dataPersistor
     */
    public function __construct(
        \Magento\Backend\App\Action\Context $context,
        \Magento\Framework\App\Request\DataPersistorInterface $dataPersistor,
        \Magento\Customer\Api\CustomerRepositoryInterface $customerRepository
    ) {
        $this->dataPersistor = $dataPersistor;
        $this->customerRepository = $customerRepository;
        parent::__construct($context);
    }

    /**
     * Save action
     *
     * @return \Magento\Framework\Controller\ResultInterface
     */
    public function execute()
    {
        /** @var \Magento\Backend\Model\View\Result\Redirect $resultRedirect */
        $resultRedirect = $this->resultRedirectFactory->create();
        $postData = $this->getRequest()->getPostValue();  
        if ($postData) { 
            $dataArray = $this->getRequest()->getParam('data');
            $customerId = $dataArray['customer'];
            $customerData = $this->customerRepository->getById($customerId);           
           
            $data['customer_id'] = $customerId;
            $data['name'] = $customerData->getFirstname()." ".$customerData->getLastname();
            $data['email'] = $customerData->getEmail();
            $data['credit_type'] = $postData['credit_type'];

            if ($data) {                

                $id = $data['customer_id'];
            
                $model = $this->_objectManager->create(\Jag\CreditInformation\Model\CustomerInfo::class)->load($id, 'customer_id');
                
                if ($model->getCustomerInfoId()) {                                      
                   $data['customer_info_id'] = $model->getCustomerInfoId();
                }                
                $model->setData($data);            
                try {
                    $model->save();
                    $this->messageManager->addSuccessMessage(__('You saved the Customer Info.'));
                    $this->dataPersistor->clear('jag_creditinformation_customer_info');
            
                    if ($this->getRequest()->getParam('back')) {
                        return $resultRedirect->setPath('*/*/edit', ['customer_info_id' => $model->getId()]);
                    }
                return $resultRedirect->setPath('*/*/edit', ['customer_info_id' => $this->getRequest()->getParam('customer_info_id')]);
                    return $resultRedirect->setPath('*/*/edit');
                } catch (LocalizedException $e) {
                    $this->messageManager->addErrorMessage($e->getMessage());
                } catch (\Exception $e) {
                    $this->messageManager->addExceptionMessage($e, __('Something went wrong while saving the Customer Info.'));
                }
            
                $this->dataPersistor->set('jag_creditinformation_customer_info', $data);
                return $resultRedirect->setPath('*/*/edit', ['customer_info_id' => $this->getRequest()->getParam('customer_info_id')]);
            }
        }    
        return $resultRedirect->setPath('*/*/edit');
    }
}

