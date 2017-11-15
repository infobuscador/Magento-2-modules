<?php
namespace Clickmedia\Modoempleo\Controller\Index;
/**
 * Created by clickmedia.es
 * Author: julian <julian@clickmedia.es>
 * Author's website: http://www.clickmedia.es
 * Date Time: 27/10/17 - 11:42
 */
class Index extends \Magento\Framework\App\Action\Action
{
    /**
     * @var \Magento\Framework\View\Result\PageFactory
     */
    protected $resultPageFactory;
    /**
     * @param \Magento\Framework\App\Action\Context $context
     * @param \Magento\Framework\View\Result\PageFactory resultPageFactory
     */
    public function __construct(
        \Magento\Framework\App\Action\Context $context,
        \Magento\Framework\View\Result\PageFactory $resultPageFactory
    )
    {
        $this->resultPageFactory = $resultPageFactory;
        parent::__construct($context);
    }
    /**
     * Default customer account page
     *
     * @return void
     */
    public function execute()
    {
        return $this->resultPageFactory->create();
    }
}