<?php
/**
 * Created by clickmedia.es
 * Author: julian <julian@clickmedia.es>
 * Author's website: http://www.clickmedia.es
 * Date Time: 15/11/17 - 22:36
 */
namespace Clickmedia\Nacex\Block;
class Nacex extends \Magento\Framework\View\Element\Template
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
        return "It works!";
    }
}
?>