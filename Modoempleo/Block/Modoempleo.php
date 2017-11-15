<?php
namespace Clickmedia\Modoempleo\Block;
/**
 * Created by clickmedia.es
 * Author: julian <julian@clickmedia.es>
 * Author's website: http://www.clickmedia.es
 * Date Time: 27/10/17 - 11:43
 */
class Modoempleo extends \Magento\Framework\View\Element\Template
{
    public function __construct(
        \Magento\Backend\Block\Template\Context $context,
        array $data = []
    )
    {
        parent::__construct($context, $data);
    }
    public function getMymodule()
    {
        return 'Module Created Successfully';
    }
}
?>