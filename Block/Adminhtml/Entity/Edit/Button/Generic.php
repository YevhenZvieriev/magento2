<?php

namespace Gene\BlueFoot\Block\Adminhtml\Entity\Edit\Button;

use Magento\Catalog\Api\Data\ProductInterface;
use Magento\Framework\Registry;
use Magento\Framework\View\Element\UiComponent\Context;
use Magento\Framework\View\Element\UiComponent\Control\ButtonProviderInterface;

/**
 * Class Generic
 *
 * @package Gene\BlueFoot\Block\Adminhtml\Entity\Edit\Button
 */
class Generic implements ButtonProviderInterface
{
    /**
     * Url Builder
     *
     * @var Context
     */
    protected $context;

    /**
     * Registry
     *
     * @var Registry
     */
    protected $registry;

    /**
     * Generic constructor
     *
     * @param Context $context
     * @param Registry $registry
     */
    public function __construct(
        Context $context,
        Registry $registry
    ) {
        $this->context = $context;
        $this->registry = $registry;
    }

    /**
     * Generate url by route and parameters
     *
     * @param string $route
     * @param array $params
     * @return string
     */
    public function getUrl($route = '', $params = [])
    {
        return $this->context->getUrl($route, $params);
    }

    /**
     * Get product
     *
     * @return ProductInterface
     */
    public function getEntity()
    {
        return $this->registry->registry('current_entity');
    }

    /**
     * {@inheritdoc}
     */
    public function getButtonData()
    {
        return [];
    }

    /**
     * Get the button target
     *
     * @return mixed|string
     */
    public function getTargetName()
    {
        if ($editFormPath = $this->context->getRequestParam('edit_form_path')) {
            return $editFormPath;
        }
        return 'bluefoot_edit.bluefoot_edit.bluefoot_edit_form';
    }
}
